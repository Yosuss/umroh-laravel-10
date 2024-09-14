<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListPendaftarController extends Controller
{
    public function index()
    {
        $data = DB::table('daftar')->paginate(3);
        return view('admin.list-pendaftar', compact('data'));
    }
}
