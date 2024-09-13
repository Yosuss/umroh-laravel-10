<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    //
    public function index()
    {
        $testimoni = DB::table("testimoni")->get();
        $kesan = DB::table("kesan")->get();
        $contact = DB::table("contact")->get();
        return view('admin.dashboard',compact('testimoni','kesan','contact'));
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