<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Attempt to log in the user with the provided credentials
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = Auth::user(); // Get the authenticated user
    
            // Redirect based on the user's role
            if ($user->role == 0) {
                return redirect()->route('dashboard');
            } else {
                return redirect()->route('home');
            }
        } else {
            // Authentication failed
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }
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
    public function logOut(Request $request)
{
    // Log out the authenticated user
    Auth::logout();
    return redirect()->route('home');
}
public function profile(Request $request)
{
    $profile=User::where('role','=',0)->first();
    return view('Auth.profile',compact('profile'));
}

}
