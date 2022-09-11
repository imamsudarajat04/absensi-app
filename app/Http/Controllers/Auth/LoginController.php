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
            if(Auth::user()->role == 'admin')
            {
                return "admin";
            }else{
                return "karyawan";
            }

            return "berhasil";
        }
        return redirect('/')->with('info', 'Your Email and Password are invalid!');
    }

    public function logout() 
    {
        Auth::logout();
        return redirect()->route('login')->with('info', 'Success Logout!');
    }
}
