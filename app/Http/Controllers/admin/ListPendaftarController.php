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
    public function hapus($id_daftar)
    {
        $delete = DB::table('daftar')->where('id_daftar', $id_daftar)->delete();
        if ($delete) return to_route('list-pendaftar');
        // $hapus_daftar = pendaftaranModel::findOrFail($id_daftar);
        // $hapus_daftar->delete();
        // return redirect()->route('list-pendaftaran')->with('success', 'Data berhasil dihapus');
    }
    }