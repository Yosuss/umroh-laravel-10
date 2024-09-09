<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class testimoniController extends Controller
{
    //]
    public function testimoni(){
        
        $data_desktop = DB::table("testimoni")->paginate(9);
        $data_tablet = DB::table("testimoni")->paginate(6);
        $data_mobile = DB::table("testimoni")->paginate(3);
        return view('main.testimoni',compact("data_desktop","data_tablet","data_mobile"));
        
    }
    
}