<?php

namespace App\Http\Controllers;

use App\Models\pendaftaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class layananController extends Controller
{
    //
    public function layanan(){
        $daftar = DB::table("daftar");
        // $daftar = pendaftaranModel::all();
        return view('main.layanan',compact('daftar'));
    }

    public function tambah(Request $request){
        $request->validate([
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'no' => 'required|numeric',
            'date' => 'required|string',
            'jumlah' => 'required|string',
        ]);
        $data = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no' => $request->no,
            'date' => $request->date,
            'jumlah' => $request->jumlah,
        ];
        DB::table("daftar")->insert($data);
        return redirect()->to('layanan')->with('success','Data berhasil ditambahkan');
    }

}