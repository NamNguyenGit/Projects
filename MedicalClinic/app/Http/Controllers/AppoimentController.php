<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\appointment;

class AppoimentController extends Controller
{
    public function index()
    {
        $appointment = appointment::all();
        return view('adminmanager.appointment.index', compact('appointment'));
    }
    public function editstatus(Request $request)
    {
        appointment::where('id', $request->id)->update([
            'status' =>  $request->status
        ]);
        return redirect()->route('appointment.index');
    }
}
