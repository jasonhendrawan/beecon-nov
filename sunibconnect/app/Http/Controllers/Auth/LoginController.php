<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    // use AuthenticatesUsers;
    
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if (Auth::attempt($credentials)) {
            // Authentication successful
            return redirect()->intended('/discover'); // Replace '/dashboard' with your desired redirect path
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['message' => 'Invalid email or password']);
        }
    }
    
}



