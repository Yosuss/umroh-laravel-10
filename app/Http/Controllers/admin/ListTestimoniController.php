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
        return view('admin.list-testimoni', compact('testimoni'));
    }

    public function hapus($id)
    {
        try {
            testimoniModel::where('id_testimoni', $id)->delete();
            return to_route('list-testimoni');
        } catch (\Exception $e) {
            return to_route('liist-testimoni')->withErrors('gagal hapus');
        }
    }

    public function edit(Request $request, $id)
    {
        $testimoni = testimoniModel::findOrFail($id);
        return view('admin.list-testimoni', compact('testimoni'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'desk' => 'required',
            'testimoni' => 'required',
        ]);

        $testimoni = testimoniModel::findOrFail($id);
        try {
            $testimoni->nama = $request->input('nama');
            $testimoni->desk = $request->input('desk');
            $testimoni->testimoni = $request->input('testimoni');

            $testimoni->save();
            return redirect()->route('list-testimoni');
        } catch (\Exception $e) {
            return redirect()->route('list-testimoni')->withErrors('Gagal mengupdate data: ' . $e->getMessage());
        }
            }
}