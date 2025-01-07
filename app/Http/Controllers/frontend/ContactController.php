<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request)
    {
        //return $request;
        $request->validate([
            'fullname' => 'required|string|max:255', // Limit to 255 characters for safety
            'email' => 'required|email|max:255',    // Validate email format and limit
            'subject' => 'required|string|max:100', // Subject should have a reasonable length
            'message' => 'required|string|max:65535' // Max for a TEXT column in MySQL
        ]);
        Contact::create([
            'fullname'=>$request->fullname,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);
        return redirect()->route('contact')->with('success','Successfully submit your information');
    }
}
