<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required',
            'studentId' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
            'gender' => 'required',
            'major' => 'required',
            'region' => 'required',
        ]);

        // Create a new user instance
        $user = new User();
        $user->name = $validatedData['name'];
        $user->studentId = $validatedData['studentId'];
        $user->email = $validatedData['email'];
        $user->password = Hash::make($validatedData['password']);
        $user->gender = $validatedData['gender'];
        $user->major = $validatedData['major'];
        $user->region = $validatedData['region'];

        // Save the user to the database
        if($user->save()){
            // Created
            Session::flash('success', 'User created succesfully.');
            return redirect()->route('login');
        }else{
            // Failed
            Session::flash('error', 'User created failed. Please try again.');
            return redirect()->back()->withErrors($user->errors())->withInput();
        }

        // Redirect to a success page or perform any other actions
        return redirect()->route('success');
    }
}