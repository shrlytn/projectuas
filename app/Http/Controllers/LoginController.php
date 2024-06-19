<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginPage(){
        return view('User.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/layout');
        }

        return back()->withErrors([
            'email' =>'The provided credentials do not match our records',
        ]);
    }

}
