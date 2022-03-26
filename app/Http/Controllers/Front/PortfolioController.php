<?php

namespace App\Http\Controllers\Front;

use App\Cat;
use App\Http\Controllers\Controller;
use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        $data ['cats'] = Cat::get();
        $data ['portfolios'] = Portfolio::get();
        return view('front.portfolio')->with($data);
    }
}
