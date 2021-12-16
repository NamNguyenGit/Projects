<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Http\Requests\service\createvalidate;
use App\Http\Requests\service\updatevalidate;

class ServiceController extends Controller
{
    public function index()
    {
        $service = service::all();
        return view('adminmanager.service.index', compact('service'));
    }
    public function create()
    {
        return view('adminmanager.service.create');
    }
    public function postcreate(createvalidate $request)
    {
        $add = service::create([
            'name' => $request->name,
            'price' => $request->price,
            'benefit' => $request->benefit,
        ]);
        if ($add) {
            return redirect()->route('service.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('service.index')->with('fail', 'Add fail');
        }
    }
    public function edit($id)
    {
        $service = service::where('id', $id)->first();
        return view('adminmanager.service.update', compact('service'));
    }
    public function store(updatevalidate $request)
    {
        $edit = service::where('id', $request->id)->update([
            'name' => $request->name,
            'price' => $request->price,
            'benefit' => $request->benefit
        ]);
        if ($edit) {
            return redirect()->route('service.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('service.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        service::where('id', $id)->delete();
        return redirect()->route('service.index');
    }
}
