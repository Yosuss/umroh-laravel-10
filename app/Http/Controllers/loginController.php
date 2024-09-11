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

    public function login(Request $request){
        $username = $request->input('user');
        $password = $request->input('pass');
        $request->validate([
            'user' => 'required|string',
            'pass' => 'required|string',
        ]);        

        // Cek jika username adalah 'user' dan password adalah '200'
        if ($username === 'user' && $password === '200') {
            // Jika berhasil, redirect ke /main
            return redirect('/');
        } else {
            // Jika gagal, tetap di /login dengan pesan error
            // return redirect('/login')->withErrors(['login' => 'Username atau password salah.']);
            return redirect('/login');
        }
    }
}