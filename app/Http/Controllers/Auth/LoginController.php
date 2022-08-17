<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }

    public function login(Request $request) {
        if(Auth::attempt($request->only('email', 'password')))
        {
            // return redirect('/beranda');
            return "berhasil";
        }
        return redirect('/')->with('error', 'Your username and password are invalid!');
    }
}
