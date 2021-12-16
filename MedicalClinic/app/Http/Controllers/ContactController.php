<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus;

class ContactController extends Controller
{
    //
    public function index()
    {
        $contactus = contactus::all();
        return view('adminmanager.contactus.index', compact('contactus'));
    }
    public function editstatus(Request $request)
    {
        contactus::where('id', $request->id)->update([
            'status' => $request->status
        ]);
        return redirect()->route('contactus.index');
    }
}
