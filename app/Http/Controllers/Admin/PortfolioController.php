<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{

    public function index()
    {
        $portfolios = Portfolio::get();
        return view('admin.portfolio.portfolio',compact('portfolios'));
    }

    public function create()
    {
        $portfolios = Portfolio::get();
        return view('admin.portfolio.create',compact('portfolios'));
    }

    public function store(Request $request)
    {
        $portfolios = $request->validate([
            'name' => 'required|string|max:60',
            'img' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $new_name = $portfolios['img']->hashName();
        Image::make($portfolios['img'])->resize('500','500')->save(public_path('img/portfolio/'. $new_name));
        $portfolios['img'] = $new_name;

        Portfolio::create($portfolios);

        return redirect(route('admin.portfolio.index',compact('portfolios')));
    }

    public function edit($id)
    {
        $portfolios = Portfolio::findOrFail($id);
        return view('admin.portfolio.edit',compact('portfolios'));
    }

    public function update(Request $request)
    {
        $portfolios = $request->validate([
            'name' => 'required|string|max:60',
            'img' => 'nullable|image|mimes:jpg,jpeg,png',
        ]);

        $old_name = Portfolio::findOrFail($request->id)->img;

        if ($request->hasFile('img'))
        {
            Storage::disk('public')->delete('img/portfolio/' . $old_name);

            $new_name = $portfolios['img']->hashName();
            Image::make($portfolios['img'])->resize('500','500')->save(public_path('img/portfolio/'. $new_name));
            $portfolios['img'] = $new_name;
        }
        else
        {
            $portfolios['img'] = $old_name;
        }

        Portfolio::findOrFail($request->id)->update($portfolios);

        return redirect(route('admin.portfolio.index',compact('portfolios')));

    }

    public function delete($id)
    {
        $old_name = Portfolio::findOrFail($id)->img;

        Storage::disk('public')->delete('img/portfolio/'. $old_name);

        Portfolio::findOrFail($id)->delete();
        return back();
    }
}
