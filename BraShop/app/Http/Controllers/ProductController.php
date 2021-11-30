<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use Illuminate\Http\Request;
use App\Http\Requests\Product\StoreRequest;
use App\Http\Requests\Product\UpdateRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::paginate(5);
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::orderBy('name','ASC')->get();
        $color = Color::get();
        $size = Size::get();

        return view('admin.product.create',compact('category','color','size'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('frontend/img/product'), $file_name);
            $request->merge(['image' => $file_name]);
        }

        if (Product::create($request->only('name','price','sale_price','content','category_id','color_id','size_id','image','quantity','status'))) {
            return redirect()->route('product.index');
        }else{

        }              
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $category = Category::orderBy('name','ASC')->get();
        $color = Color::get();
        $size = Size::get();

        return view('admin.product.edit',compact('product','category','color','size'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Product $product)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('frontend/img/product'), $file_name);
            $request->merge(['image' => $file_name]);

            $product->update($request->only('name','price','sale_price','content','category_id','color_id','size_id','image','quantity','status'));
        }else{
            $product->update($request->only('name','price','sale_price','content','category_id','color_id','size_id','quantity','status'));
        }

        
        return redirect()->route('product.index');

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    }
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index');
    }
}
