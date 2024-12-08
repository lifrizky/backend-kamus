<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function tampilRegis() {
        return view('auth.registrasi');
    }

    function submitRegis(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        return redirect()->route('login');
    }

    function login() {
        return view('auth.login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('email', 'password');
        if (Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('kamus.dashboard');
        } else {
            return redirect()->back()->with('Gagal', 'Email atau Password anda salah');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('login'); 
    }
}
