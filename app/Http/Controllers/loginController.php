<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index(){
        return view('main.login');
    }

        // Logika login
        public function login(Request $request)
        {
            // Validasi input
            $credentials = $request->validate([
                'username' => 'required|string',
                'password' => 'required|string',
            ]);
    
            // Autentikasi
            if (Auth::attempt($credentials)) {
                // Jika berhasil login, redirect ke /main
                return redirect()->intended('/main');
            }
    
            // Jika gagal, redirect ke /login dengan pesan error
            return redirect()->back()->withErrors([
                'username' => 'Username atau password salah.',
            ]);
        }
    
        // Menampilkan halaman utama
        public function main()
        {
            return view('main'); // Buat view main.blade.php
        }
    
}