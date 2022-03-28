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
        $serves = Serve::orderBy('id','DESC')->get();
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

        $old_name2 = Serve::findOrFail($request->id)->img;

        $old_name1 = Serve::findOrFail($request->id)->bg_img;

        if ($request->hasFile('img' && $request->hasFile('bg_img')))
        {
            Storage::disk('public')->delete('img/' . $old_name1);
            Storage::disk('public')->delete('img/' . $old_name2);

            $new_name1 = $serves['bg_img']->hashName();
            Image::make($serves['bg_img'])->save(public_path('/img/'. $new_name1));
            $serves['bg_img'] = $new_name1;

            $new_name2 = $serves['img']->hashName();
            Image::make($serves['img'])->save(public_path('/img/'. $new_name2));
            $serves['img'] = $new_name2;

        }
        else
        {
            $serves['img'] = $old_name2;
            $serves['bg_img'] = $old_name1;
        }

        Serve::findOrFail($request->id)->update($serves);

        return redirect(route('admin.serves.index',))->with($serves);
    }

    public function delete($id)
    {
        $old_name2 = Serve::findOrFail($id)->img;
        $old_name1 = Serve::findOrFail($id)->bg_img;

        Storage::disk('public')->delete('img/'. $old_name1);
        Storage::disk('public')->delete('img/'. $old_name2);

        Serve::findOrFail($id)->delete();

        return back();
    }
}
