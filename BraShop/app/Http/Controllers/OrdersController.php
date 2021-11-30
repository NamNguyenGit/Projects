<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\OrderDetail;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = Orders::orderBy('created_at','DESC')->paginate();
        return view('admin.order.index',compact('order'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders = Orders::find($id);
        return view('admin.order.detail',compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function edit(Orders $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {    
        Orders::where('id',$id)->update($request->only('status'));
        return redirect()->route('order.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Orders  $orders
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        OrderDetail::where('order_id',$id)->delete();
        Orders::where('id',$id)->delete();
        return redirect()->route('order.index');
    }

    public function order_filter(Request $request){
        if($request->filter){
            if($request->filter == 1){
                $order = Orders::orderBy('created_at','DESC')->paginate();      
                return view('admin.order.index',compact('order'));
            }
            else if($request->filter == 2){
                $order = Orders::orderBy('created_at','DESC')->where('status',0)->paginate();
                return view('admin.order.index',compact('order'));
            }
            else if($request->filter == 3){
                $order = Orders::orderBy('created_at','DESC')->where('status',1)->paginate();
                return view('admin.order.index',compact('order'));
            }
            else if($request->filter == 4){
                $order = Orders::orderBy('created_at','DESC')->where('status',2)->paginate();
                return view('admin.order.index',compact('order'));
            }
            else{
                $order = Orders::orderBy('created_at','DESC')->paginate();      
                return view('admin.order.index',compact('order'));
            }
        }else{
            $order = Orders::orderBy('created_at','DESC')->paginate();      
            return view('admin.order.index',compact('order'));
        }
    }
}
