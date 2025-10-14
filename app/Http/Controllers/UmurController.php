<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UmurController extends Controller
{
    public function form()
    {
        return view('umur.form');
    }

    public function proses(Request $request)
    {
        return $request;
    }

    public function sukses()
    {
        return view('umur.sukses');
    }


}
