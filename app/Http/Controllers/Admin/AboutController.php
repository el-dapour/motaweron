<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::get();
        return view('admin.about.about', compact('abouts'));
    }

    public function create()
    {
        $abouts = About::get();
        return view('admin.about.create', compact('abouts'));
    }

    public function store(Request $request)
    {
        $abouts = $request->validate([
            'name' => 'required|string|max:191',
            'title' => 'required|string|max:191',
            'desc' => 'required|string',
        ]);

        About::create($abouts);

        return redirect(route('admin.about.index'));

    }

    public function edit($id)
    {
        $abouts = About::findOrFail($id);
        return view('admin.about.edit', compact('abouts'));
    }

    public function update(Request $request)
    {
        $abouts = $request->validate([
            'name' => 'required|string|max:191',
            'title' => 'required|string|max:191',
            'desc' => 'required|string',
        ]);

        About::findOrFail($request->id)->update($abouts);

        return redirect(route('admin.about.index'));

    }

    public function delete($id)
    {
        About::findOrFail($id)->delete();

        return back();
    }
}
