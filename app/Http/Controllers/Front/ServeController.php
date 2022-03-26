<?php

namespace App\Http\Controllers\Front;

use App\Cat;
use App\Http\Controllers\Controller;
use App\Serve;

class ServeController extends Controller
{
    public function index($id)
    {
        $data['serves'] = Serve::findOrFail($id);
        $data ['cats'] = Cat::get();
        $data ['cat'] = cat::get()->where('id' , $id);
        return view('front.catShow')->with($data);
    }
}
