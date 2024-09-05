<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tentangKamiController extends Controller
{
    //
    public function tentangkami(){
        return view('main.tentang-kami');
    }
}