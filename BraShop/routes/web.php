<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => ''], function(){
	Route::get('/',[HomeController::class,'index'])->name('client.index');
	Route::get('/search',[HomeController::class,'search'])->name('client.search');
	Route::get('/filter',[HomeController::class,'filter'])->name('client.filter');
	Route::get('/shop',[HomeController::class,'shop'])->name('client.shop');
	Route::get('/about',[HomeController::class,'about'])->name('client.about');
	Route::get('/contact',[HomeController::class,'contact'])->name('client.contact');
	Route::get('/product/{id}',[HomeController::class,'product'])->name('client.product');
	Route::get('/login',[HomeController::class,'login'])->name('client.login');
	Route::post('/login',[HomeController::class,'check_login'])->name('client.login');
	Route::get('/logout',[HomeController::class,'logout'])->name('client.logout');
	Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
	Route::post('/admin/login',[AdminController::class,'check_login'])->name('admin.login');
	Route::resource('mail',MailController::class);
	Route::resource('customer',CustomerController::class);
});

Route::group(['prefix' => 'cart'], function(){
	Route::get('/',[CartController::class,'index'])->name('cart.index');
	Route::get('/add/{id}',[CartController::class,'add'])->name('cart.add');
	Route::get('/update/{id}/{quantity?}',[CartController::class,'update'])->name('cart.update');
	Route::get('/remove/{id}',[CartController::class,'remove'])->name('cart.remove');
	Route::get('/clear',[CartController::class,'clear'])->name('cart.clear');
	Route::get('/checkout',[CartController::class,'checkout'])->name('cart.checkout')->middleware('customer');
	Route::post('/checkout',[CartController::class,'post_checkout'])->name('cart.checkout')->middleware('customer');
});

Route::group(['prefix' => 'info', 'middleware' => 'customer'], function(){
	Route::get('/',[HomeController::class,'list_info'])->name('info.index');
	Route::get('/order-detail/{id}',[HomeController::class,'order_detail'])->name('info.order-detail');
});

Route::group(['prefix' => 'admin','middleware' => 'auth'], function(){
	Route::get('/',[OrdersController::class,'index'])->name('admin.index');
	Route::get('/order-filter',[OrdersController::class,'order_filter'])->name('admin.filter');
	Route::resource('category',CategoryController::class);
	Route::resource('product',ProductController::class);
	Route::resource('color',ColorController::class);
	Route::resource('size',SizeController::class);
	Route::resource('order',OrdersController::class);
	Route::resource('banner',BannerController::class);
	Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');
});