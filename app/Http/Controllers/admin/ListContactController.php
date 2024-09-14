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
        return view('admin.list-contact',compact('contact'));
    }
}