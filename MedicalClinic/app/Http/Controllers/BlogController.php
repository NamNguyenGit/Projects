<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blog;
use App\Http\Requests\blog\createvalidate;
use App\Http\Requests\blog\updatevalidate;


class BlogController extends Controller
{
    public function index()
    {
        $blog = blog::all();

        return view('adminmanager.blog.index', compact('blog'));
    }
    public function create()
    {
        return view('adminmanager.blog.create');
    }
    public function postcreate(createvalidate $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('/img'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $add = blog::create([
            'title'  => $request->title,
            'content'  => $request->content,
            'smallcontent'  => $request->smallcontent,
            'image' => $request->image

        ]);
        if ($add) {
            return redirect()->route('blog.index')->with('success', 'Add successful');
        } else {
            return redirect()->route('blog.index')->with('fail', 'Add fail');
        }
    }
    public function edit($id)
    {
        $blog = blog::where('id', $id)->first();

        return view('adminmanager.blog.update', compact('blog'));
    }

    public function store(Request $request)
    {
        if ($request->hasFile('file_upload')) {
            $file_name = $request->file_upload->getClientOriginalName();
            $request->file_upload->move(public_path('/img'), $file_name);
            $request->merge(['image' => $file_name]);
        }
        $edit = blog::where('id', $request->id)->update([
            'title' => $request->title,
            'content' => $request->content,
            'smallcontent'  => $request->smallcontent,
            'image' => $request->image
        ]);

        if ($edit) {
            return redirect()->route('blog.index')->with('success', 'Edit successful');
        } else {
            return redirect()->route('blog.index')->with('fail', 'Edit fail');
        }
    }
    public function delete($id)
    {
        blog::where('id', $id)->delete();
        return redirect()->route('blog.index');
    }
}
