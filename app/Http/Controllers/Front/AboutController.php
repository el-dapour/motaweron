<?php

namespace App\Http\Controllers\Front;

use App\About;
use App\Cat;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $data ['cats'] = Cat::get();
        $data ['abouts'] = About::get();
        return view('front.about')->with($data);
    }
}
