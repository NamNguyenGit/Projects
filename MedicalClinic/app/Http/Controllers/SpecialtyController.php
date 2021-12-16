<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\specialty;
use App\Http\Requests\specialty\validatecreate;
use App\Http\Requests\specialty\validateupdate;

class SpecialtyController extends Controller
{
    //
    public function index()
    {
        $specialty = specialty::all();
        return view('adminmanager.specialty.index', compact('specialty'));
    }
    public function create()
    {
        return view('adminmanager.specialty.create');
    }
    public function postcreate(validatecreate $request)
    {
        $add = specialty::create([
            'name' => $request->name,
            'specializing' => $request->specializing
        ]);
        if ($add) {
            return redirect()->route('specialty.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('specialty.index')->with('fail', 'Add fail');
        }
    }
    public function edit($id)
    {
        $specialty = specialty::where('id', $id)->first();
        return view('adminmanager.specialty.update', compact('specialty'));
    }
    public function store(validateupdate $request)
    {
        $edit = specialty::where('id', $request->id)->update([
            'name' => $request->name,
            'specializing' => $request->specializing,

        ]);
        if ($edit) {
            return redirect()->route('specialty.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('specialty.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        specialty::where('id', $id)->delete();
        return redirect()->route('specialty.index');
    }
}
