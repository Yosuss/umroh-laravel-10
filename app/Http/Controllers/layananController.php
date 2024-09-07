<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layananController extends Controller
{
    //
    public function layanan(){
        return view('main.layanan');
    }
}