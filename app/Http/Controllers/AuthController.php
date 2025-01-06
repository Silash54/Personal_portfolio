<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function login()
    {
        return view('Auth.login');
    }
    public function login_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password'=>'required'
        ]);
        $user=User::where('email',$request->email);
        return$user;
    }
    public function register()
    {
        return view('Auth.register');
    }
    public function register_post(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password'=>'required'
        ]);
        User::create(
            [
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)
            ]);
            return redirect()->route('login')->with('success','User register successfully!');
    }
}
