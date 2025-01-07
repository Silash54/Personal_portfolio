<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.layout.dashboard');
    }
    public function message()
    {
        $message=Contact::all();
        //return $message;
        return view('admin.contact.message',compact('message'));
    }
}
