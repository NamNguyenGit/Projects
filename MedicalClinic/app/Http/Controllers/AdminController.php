<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view("adminmanager.index");
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route("adminmanager.login");
    }
}
