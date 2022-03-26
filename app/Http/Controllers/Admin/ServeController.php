<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Serve;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class ServeController extends Controller
{

    public function index()
    {
        $serves = Serve::get();
        return view('admin.serve.serve',compact('serves'));
    }

    public function create()
    {
        $serves = Serve::get();
        $cats = Cat::get();
        return view('admin.serve.create',compact('serves','cats'));
    }

    public function store(Request $request)
    {
        $serves = $request->validate([
            'name' => 'required|string|max:191',
            'bg_img' => 'required|image|mimes:jpg,jpeg,png',
            'title' => 'required|string|max:191',
            'img' => 'required|image|mimes:jpg,jpeg,png',
            'desc' => 'required|string',
            'cat_id' => 'required|exists:cats,id',
        ]);

        $new_name = $serves['bg_img']->hashName();
        Image::make($serves['bg_img'])->save(public_path('/img/'. $new_name));
        $serves['bg_img'] = $new_name;

        $new_name = $serves['img']->hashName();
        Image::make($serves['img'])->save(public_path('/img/'. $new_name));
        $serves['img'] = $new_name;

        Serve::create($serves);

        return redirect(route('admin.serves.index',))->with($serves);

    }

    public function edit($id)
    {
        $serves = Serve::findOrFail($id);
        $cats = Cat::get();
        return view('admin.serve.edit',compact('serves','cats'));
    }

    public function update(Request $request)
    {
        $serves = $request->validate([
            'name' => 'required|string|max:191',
            'bg_img' => 'nullable|image|mimes:jpg,jpeg,png',
            'title' => 'required|string|max:191',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
            'desc' => 'required|string',
            'cat_id' => 'nullable|exists:cats,id',
        ]);

        $old_name = Serve::findOrFail($request->id)->img;

        if ($request->hasFile('img'))
        {
            Storage::disk('public')->delete('img/' . $old_name);

            $new_name = $serves['bg_img']->hashName();
            Image::make($serves['bg_img'])->save(public_path('/img/'. $new_name));
            $serves['bg_img'] = $new_name;

            $new_name = $serves['img']->hashName();
            Image::make($serves['img'])->save(public_path('/img/'. $new_name));
            $serves['img'] = $new_name;

        }
        else
        {
            $serves['bg_img'] = $old_name;
            $serves['img'] = $old_name;
        }

        Serve::findOrFail($request->id)->update($serves);

        return redirect(route('admin.serves.index',))->with($serves);
    }

    public function delete($id)
    {
        $old_name = Serve::findOrFail($id)->img;
        $old_name = Serve::findOrFail($id)->bg_img;

        Storage::disk('public')->delete('img/'. $old_name);
        Storage::disk('public')->delete('img/'. $old_name);

        Serve::findOrFail($id)->delete();

        return back();
    }
}
