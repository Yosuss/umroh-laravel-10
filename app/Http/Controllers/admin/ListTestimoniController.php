<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\testimoniModel;
use Illuminate\Http\Request;

class ListTestimoniController extends Controller
{
    public function index()
    {
        $testimoni = testimoniModel::paginate(5);
        return view('admin.list-testimoni',compact('testimoni'));
    }

    public function hapus($id){
        try {
            testimoniModel::where('id_testimoni',$id)->delete();
            return to_route('list-testimoni');
        } catch (\Exception $e) {
            return to_route('liist-testimoni')->withErrors('gagal hapus');
        }
    }

    public function edit(Request $request,$id){
        $testimoni_edit = testimoniModel::findOrFail($id);
        return view('admin.list-testimoni-edit',compact('testimoni_edit'));

        $request->validate([
            'nama' => 'required',
            'desk' => 'required',
            'testimoni' => 'required',
        ]);
        
        $testimoni_edit = testimoniModel::findOrFail($id);
        $testimoni_edit->alamat = $request->input('nama');
        $testimoni_edit->nama = $request->input('desk');
        $testimoni_edit->nama = $request->input('testimoni');
        $testimoni_edit->save();

        try {
            testimoniModel::where('id_testimoni',$id)->delete();
            return to_route('list-pentestimoni');
        } catch (\Exception $e) {
            return to_route('liist-pentestimoni')->withErrors('gagal hapus');
        }
        // return to_route('list-pentestimoni')->with('berhasil');
    }
}