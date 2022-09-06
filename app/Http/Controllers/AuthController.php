<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; //cara kedua /\Auth
class AuthController extends Controller
{
    // Tampilkan halaman login
    public function showLogin()
    {
        return view('auth.login');
    }

    public function submitLogin(Request $request)
    {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/admin');
        }else {
            return redirect()->back()->with('error', 'email atau password salah');
        }
    }

    public function doLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
