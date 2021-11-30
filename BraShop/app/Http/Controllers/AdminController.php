<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{   
    public function index()
    {
        return view('admin.order.index');
    }

    public function login()
    {
        return view('admin.login.index');
    }

    public function check_login(Request $request)
    {
        $check = Auth::attempt($request->only('email','password'), $request->has('remember'));
        
        if($check){
            return redirect()->route('order.index');
        }else{
            return redirect()->back()->with('faillure','Account or password is not correct.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}