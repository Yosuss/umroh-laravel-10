<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mainController extends Controller
{
    //
    public function index(){
        $kesan = DB::table("kesan")->get();
        return view('main.main',compact("kesan"));
    }
}