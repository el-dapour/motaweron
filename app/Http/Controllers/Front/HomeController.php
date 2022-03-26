<?php

namespace App\Http\Controllers\Front;

use App\Cat;
use App\Http\Controllers\Controller;
use App\Portfolio;
use App\Serve;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // Pages Views
    public function index()
    {
        $data ['portfolios'] = Portfolio::get();
        $data ['cats'] = Cat::get();
        return view('front.index')->with($data);
    }

    public function process()
    {
        $data ['cats'] = Cat::get();
        return view('front.process')->with($data);
    }
    public function contact()
    {
        $data ['cats'] = Cat::get();
        return view('front.contact')->with($data);
    }
}
