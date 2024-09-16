<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    //
    public function index()
    {
        $testimoni = DB::table("testimoni")->paginate(3);
        $contact = DB::table("contact")->get();

        $totalTestimoni = DB::table("testimoni")->count();
        $totalPendaftar = DB::table('daftar')->count();
        $totalContact = DB::table('contact')->count();

        return view('admin.dashboard', compact('testimoni', 'contact', 'totalTestimoni', 'totalPendaftar', 'totalContact'));
    }
}