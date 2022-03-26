<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Return_;

class MessageController extends Controller
{

    public function index()
    {
        $messages = Contact::select('id','name','email','message')->orderBy('id','DESC')->get();
        return view('admin.message',compact('messages'));
    }

    public function delete($id)
    {
        Contact::findOrFail($id)->delete();

        return back();
    }
}
