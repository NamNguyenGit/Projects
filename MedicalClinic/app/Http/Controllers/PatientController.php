<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;

class PatientController extends Controller
{
    public function index()
    {
        $patient = patient::all();
        return view('adminmanager.patient.index', compact('patient'));
    }
}
