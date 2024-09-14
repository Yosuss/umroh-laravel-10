<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\pendaftaranModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListPendaftarController extends Controller
{
    public function index()
    {
        $daftar = pendaftaranModel::paginate(5);
        return view('admin.list-pendaftar', compact('daftar'));
    }

    public function hapus($id){
        try {
            pendaftaranModel::where('id_daftar',$id)->delete();
            return to_route('list-pendaftar');
        } catch (\Exception $e) {
            return to_route('list-pendaftar')->withErrors('gagal hapus');
        }
    }
    
    public function edit(Request $request,$id){
        $daftar_edit = pendaftaranModel::findOrFail($id);
        return view('admin.list-pendaftar-edit',compact('daftar_edit'));

        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no' => 'required|numeric',
            'date' => 'required|numeric',
            'jumlah' => 'required|numeric',
        ]);
        
        $daftar_edit = pendaftaranModel::findOrFail($id);
        $daftar_edit->nama =$request->input('nama') ;
        $daftar_edit->alamat =$request->input('alamat') ;
        $daftar_edit->no =$request->input('no') ;
        $daftar_edit->date =$request->input('date') ;
        $daftar_edit->jumlah =$request->input('jumlah') ;
        $daftar_edit->save();

        try {
            pendaftaranModel::where('id_daftar',$id)->delete();
            return to_route('list-pendaftar');
        } catch (\Exception $e) {
            return to_route('liist-pendaftar')->withErrors('gagal hapus');
        }
        // return to_route('list-pendaftar')->with('berhasil');
    }
}