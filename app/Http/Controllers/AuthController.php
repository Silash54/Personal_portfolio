<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function login_post(Request $request)
    {
        return $request;
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function register_post(Request $request)
    {
        return $request;
    }
}
