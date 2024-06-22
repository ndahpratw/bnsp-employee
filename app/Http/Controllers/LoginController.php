<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function autentikasi(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        } else {
            return redirect('/login')->with('error', 'Invalid Email and Password! Try Again!');
        }
    }

    public function logout(Request $request) {
        if (Auth::check()){
            Auth::logout();
        } return redirect('/');
    }
}
