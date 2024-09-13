<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class dashboardController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
        // $log = $request->validate([
        //     'username' => ['required', 'string'],
        //     'password' => ['required', 'string'],
        // ]);

        // // Cek apakah username dan password cocok
        // if (Auth::attempt($log)) {
        //     // Jika valid, redirect ke dashboard
        //     return redirect()->intended('/dashboard');
        // } else {
        //     // Jika tidak valid, kembali ke /login dengan pesan error
        //     return redirect('/login')->withErrors([
        //         'loginError' => 'Username atau password salah.',
        //     ]);
        // }
    }
}