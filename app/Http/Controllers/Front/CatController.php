<?php

namespace App\Http\Controllers\Front;

use App\Cat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatController extends Controller
{
    public function index()
    {
        $cats = Cat::get();
        return view('front.catShow')->with($cats);
    }

}
