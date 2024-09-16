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

    public function hapus($id)
    {
        try {
            pendaftaranModel::where('id_daftar', $id)->delete();
            return to_route('list-pendaftar');
        } catch (\Exception $e) {
            return to_route('list-pendaftar')->withErrors('gagal hapus');
        }
    }

    public function edit(Request $request, $id)
    {
        $daftar = pendaftaranModel::findOrFail($id);
        return view('admin.list-pendaftar', compact('daftar'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'alamat' => 'required',
            'no' => 'required|numeric',
            'date' => 'required',
            'jumlah' => 'required|numeric',
            'paket_umroh' => 'required',
        ]);

        $daftar = pendaftaranModel::findOrFail($id);
        try {
            $daftar->nama = $request->input('nama');
            $daftar->alamat = $request->input('alamat');
            $daftar->no = $request->input('no');
            $daftar->date = $request->input('date');
            $daftar->jumlah = $request->input('jumlah');
            $daftar->paket_umroh = $request->input('paket_umroh');

            $daftar->save();
            return redirect()->route('list-pendaftar');
        } catch (\Exception $e) {
            return redirect()->route('list-pendaftar')->withErrors('Gagal mengupdate data.');
        }
    }
}