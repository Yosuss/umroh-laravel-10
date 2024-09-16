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
    }

    public function login_dashboard(Request $request) {}
}