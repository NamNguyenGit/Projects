<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Orders;
use App\Models\OrderDetail;
use App\Common\Cart;
use Auth;

class CartController extends Controller
{
    public function index(Cart $cart)
    {
        return view('client.cart',compact('cart'));
    }

    public function add($id, Cart $cart)
    {
        $product = Product::find($id);
        if($product){
            $cart->Add($product);
            return redirect()->back();
        }else{
            return abort(404);
        }
        
    }

    public function update($id, Request $request, Cart $cart)
    {
        $quantity = $request->quantity ? $request->quantity : 1;
        $quantity = $quantity > 0 ? floor($quantity) : 1;
        $cart->Update($id,$quantity);
        return redirect()->route('cart.index');
    }

    public function remove($id, Cart $cart)
    {
        $cart->Remove($id);
        return redirect()->back();
    }

    public function clear(Request $request)
    {
        session(['cart' => null]);
        return redirect()->back();
    }

    public function checkout(Cart $cart)
    {
        $auth = Auth::guard('customer')->user();
        return view('client.checkout',compact('cart','auth'));
    }

    public function post_checkout(Request $request, Cart $cart)
    {
        $check = false;
        if($cart->total_qtt <= 0){
            return redirect()->back()->with('qtt','Không thể đặt đơn hàng không có sản phẩm.');
        }else{
            if($order = Orders::create([
                'customer_id' => Auth::guard('customer')->user()->id,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
                'email' => $request->email,
                'note' => $request->note,
                'amount' => $cart->total_price
            ])){
                $check = true;
                $order_id = $order->id;
                foreach($cart->items as $item){
                    if(!OrderDetail::create([
                        'order_id' => $order_id,
                        'product_id' => $item['id'],
                        'price_unit' => $item['price'],
                        'quantity' => $item['quantity']
                    ])){
                        $check = false;
                        break;
                    }   
                }
            }
        }
        
        if($check == true){
            //email va PDF
            session(['cart' => null]);
            return view('client.checkout-success',compact('cart'));
        }else{
            OrderDetail::where('order_id',$order_id)->delete();
            Orders::where('id',$order_id)->delete();
            return view('client.checkout-fail',compact('cart'));
        }
    }
}
