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
}