<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\Orders;
use App\Common\Cart;
use Auth;

class HomeController extends Controller
{
    public function index(Cart $cart)
    {
        $banner = Banner::get();
        $instagram1 = Product::where('status',1)->inRandomOrder()->limit(1)->get();
        $instagram2 = Product::where('status',1)->inRandomOrder()->limit(1)->get();
        $instagram3 = Product::where('status',1)->inRandomOrder()->limit(1)->get();
        $instagram4 = Product::where('status',1)->inRandomOrder()->limit(1)->get();
        $instagram5 = Product::where('status',1)->inRandomOrder()->limit(1)->get();
        $instagram6 = Product::where('status',1)->inRandomOrder()->limit(1)->get();
        return view('client.index',compact('banner','instagram1','instagram2','instagram3','instagram4','instagram5','instagram6','cart'));
    }

    public function shop(Cart $cart)
    {
        $product = Product::get();      
        return view('client.shop',compact('product','cart'));
    }

    public function product($id, Cart $cart)
    {   
        $products = Product::find($id);
        if($products){
            $relate = Product::where('category_id',$products->category_id)->inRandomOrder()->limit(6)->get();
            return view('client.product',compact('products','relate','cart'));
        }else{
            return abort(404);
        }            
    }

    public function search(Request $request, Cart $cart)
    {
        if($request->option){
            if($request->option == 1){               
                $cat = Category::where('name','LIKE','%'.$request->key.'%')->get();

                if($cat->count()){
                    $product = Product::where('category_id',$cat[0]->id)->get();
                    return view('client.shop',compact('product','cart'));
                }
                else{
                    $product = [];
                    return view('client.shop',compact('product','cart'));
                }                                             
            }
            else if($request->option == 2){
                $color = Color::where('name','LIKE','%'.$request->key.'%')->get();

                if($color->count()){
                    $product = Product::where('color_id',$color[0]->id)->get();
                    return view('client.shop',compact('product','cart'));
                }
                else{
                    $product = [];
                    return view('client.shop',compact('product','cart'));
                }                                                             
            }
            else if($request->option == 3){
                $size = Size::where('name',$request->key)->get();

                if($size->count()){
                    $product = Product::where('size_id',$size[0]->id)->get();
                    return view('client.shop',compact('product','cart'));
                }
                else{
                    $product = [];
                    return view('client.shop',compact('product','cart'));
                }
            }
            else{
                $product = [];
                return view('client.shop',compact('product','cart'));
            }
        }else{
            $product = Product::where('name','LIKE','%'.$request->key.'%')->get();
            return view('client.shop',compact('product','cart'));
        }
    }

    public function filter(Request $request, Cart $cart)
    {   
        if($request->filter){
            if($request->filter == 1){
                $product = Product::get();      
                return view('client.shop',compact('product','cart'));
            }
            else if($request->filter == 2){
                $product = Product::orderBy('name','ASC')->get();
                return view('client.shop',compact('product','cart'));
            }
            else if($request->filter == 3){
                $product = Product::orderBy('name','DESC')->get();
                return view('client.shop',compact('product','cart'));
            }
            else if($request->filter == 4){
                $product = Product::orderBy('price','DESC')->get();
                return view('client.shop',compact('product','cart'));
            }
            else if($request->filter == 5){
                $product = Product::orderBy('price','ASC')->get();
                return view('client.shop',compact('product','cart'));
            }
            else{
                $product = Product::get();      
                return view('client.shop',compact('product','cart'));
            }
        }else{
            $product = Product::get();      
            return view('client.shop',compact('product','cart'));
        }          
    }

    public function about(Cart $cart){
        return view('client.about',compact('cart'));
    }
    
    public function contact(Cart $cart){
        return view('client.contact',compact('cart'));
    }

    public function mail(Cart $cart){
        return view('client.contact',compact('cart'));
    }

    public function login(Cart $cart){
        $check = Auth::guard('customer')->check();
        if($check){
            return redirect()->route('client.index');
        }else{
            return view('client.login',compact('cart'));
        }
    }

    public function check_login(Request $request){
        $check = Auth::guard('customer')->attempt($request->only('email','password'), $request->has('remember'));
        if($check){
            return redirect()->route('client.index');
        }else{
            return redirect()->back()->with('fail','Email or password is not correct.');
        }
    }

    public function logout(){
        Auth::guard('customer')->logout();
        return redirect()->back();
    }

    public function list_info(Cart $cart){
        $auth = Auth::guard('customer')->user();
        $order = Orders::orderBy('created_at','DESC')->where('customer_id',$auth->id)->get();
        return view('client.info',compact('cart','order'));        
    }

    public function order_detail($id, Cart $cart){
        $order = Orders::find($id);
        return view('client.order-detail',compact('cart','order'));
    }
}
