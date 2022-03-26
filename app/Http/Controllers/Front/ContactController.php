<?php

namespace App\Http\Controllers\Front;

use App\Cat;
use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $data ['cats'] = Cat::get();
        return view('front.contact')->with($data);

    }
    public function message(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:191',
            'email' => 'required|email|max:191',
            'phone' => 'nullable|numeric',
            'message' => 'required|string|max:10000',
        ]);

        Contact::create($data);

        return back();
    }

}
