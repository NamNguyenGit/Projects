<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doctor;
use App\Models\specialty;
use App\Http\Requests\doctor\createvalidate;
use App\Http\Requests\doctor\updatevalidate;

class DoctorController extends Controller
{
    public function index()
    {
        $doctor = doctor::all();
        return view('adminmanager.doctor.index', compact('doctor'));
    }
    public function create()
    {
        $specialty = specialty::all();
        return view('adminmanager.doctor.create', compact('specialty'));
    }
    public function postcreate(createvalidate $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('/img'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $add = doctor::create([
            'name' => $request->name,
            'specialty_id' => $request->specialty_id,
            'experience' => $request->experience,
            'image' => $request->image
        ]);
        if ($add) {
            return redirect()->route('doctor.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('doctor.index')->with('success', 'Add fail');
        }
    }
    public function edit($id)
    {
        $doctor = doctor::where('id', $id)->first();
        $specialty = specialty::all();
        return view('adminmanager.doctor.update', compact('specialty', 'doctor'));
    }
    public function store(updatevalidate $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('/img'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $edit = doctor::where('id', $request->id)->update([
            'name' => $request->name,
            'specialty_id' => $request->specialty_id,
            'experience' => $request->experience,
            'image' => $request->image
        ]);
        if ($edit) {
            return redirect()->route('doctor.index')->with('success', 'Edit success');
        } else {
            return redirect()->route('doctor.index')->with('success', 'Edit fail');
        }
    }
    public function delete($id)
    {
        doctor::where('id', $id)->delete();
        return redirect()->route('doctor.index');
    }
}
