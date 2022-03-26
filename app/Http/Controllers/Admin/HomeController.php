<?php

namespace App\Http\Controllers\Admin;

use App\Cat;
use App\Contact;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $data['cats'] = Cat::select('id','name')->get();
        $data ['messages'] = Contact::get();
        $data['messageC'] = Contact::count();
        return view('admin.index')->with($data);
    }

    public function logout()
    {
        auth()->logout();
        return redirect(route('admin'));
    }
}
