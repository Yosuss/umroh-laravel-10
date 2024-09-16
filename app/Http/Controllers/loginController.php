<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    //
    public function index()
    {
        return view('main.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt([
            'name' => $request->name,
            'password' => $request->password,
        ])) {
            return redirect()->intended('dashboard');
        }
        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function login_dashboard(Request $request) {}
}