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
        $contact = contactModel::findOrFail($id);
        return view('admin.list-contact-edit', compact('contact'));
    }
    
    public function update(Request $request, $id)
    {

        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'subject' => 'required',
        ]);

        $contact = contactModel::findOrFail($id);
        try {
            $contact->email = $request->input('email');
            $contact->name = $request->input('name');
            $contact->subject = $request->input('subject');
            $contact->save();
                return redirect()->route('list-contact');
        } catch (\Exception $e) {
            return redirect()->route('list-contact')->withErrors('Gagal mengupdate data.');
        }
    }
    
}