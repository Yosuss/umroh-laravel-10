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
        $validasi =  $request->validate([
            'user' => 'required|string',
            'pass' => 'required|string',
        ]);        

        if ($username === 'user' && $password === '200') {
            // Jika berhasil, redirect ke /
            return redirect('/');
        } else {
            // return redirect('/login')->withErrors(['login' => 'Username atau password salah.']);
            return redirect('/login');
        }
    }
    
    public function login_dashboard(Request $request){
        $username = $request->input('user');
        $password = $request->input('pass');
        $validasi =  $request->validate([
            'user' => 'required|string',
            'pass' => 'required|string',
        ]);        

        if ($username === 'admin' && $password === '200') {
            // Jika berhasil, redirect ke /
            return redirect('/dashboard');
        } else {
            // return redirect('/login')->withErrors(['login' => 'Username atau password salah.']);
            return redirect('/login');
        }
    }
}