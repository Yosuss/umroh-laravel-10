<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class contactController extends Controller
{
    //
    public function contact(){
        $contact = DB::table("contact");
        return view('main.contact',compact("contact"));
    }

    public function tambah(Request $request){
        $request->validate([
            'email' => 'required|string',
            'name' => 'required|string',
            'subject' => 'required|string',
        ]);
        $data = [
            'email' => $request->email,
            'name' => $request->name,
            'subject' => $request->subject,
        ];
        DB::table("contact")->insert($data);
        return redirect()->to('contact')->with('success','Data berhasil ditambahkan');
    }
}