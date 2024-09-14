<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\contactModel;
use Illuminate\Http\Request;

class ListContactController extends Controller
{
    public function index()
    {
        $contact = contactModel::paginate(5);
        return view('admin.list-contact', compact('contact'));
    }

    public function hapus($id)
    {
        try {
            contactModel::where('id_contact', $id)->delete();
            return to_route('list-contact');
        } catch (\Exception $e) {
            return to_route('list-contact')->withErrors('gagal hapus');
        }
    }

    public function edit(Request $request, $id)
    {
        $contact_edit = contactModel::findOrFail($id);
        return view('admin.list-contact-edit', compact('contact_edit'));

        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
        ]);

        $contact_edit = contactModel::findOrFail($id);
        $contact_edit->alamat = $request->input('email');
        $contact_edit->nama = $request->input('name');
        $contact_edit->nama = $request->input('subject');
        $contact_edit->save();

        try {
            contactModel::where('id_contact', $id)->delete();
            return to_route('list-contact');
        } catch (\Exception $e) {
            return to_route('liist-contact')->withErrors('gagal hapus');
        }
        // return to_route('list-contact')->with('berhasil');
    }
}