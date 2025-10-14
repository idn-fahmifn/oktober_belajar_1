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

        $request->validate([
            'name' => ['string', 'min:3', 'max:20', 'required'],
            'age' => ['numeric', 'min:1', 'max:90', 'required'],
        ], [

            'name.string' => 'Salah om, harus string',
            'name.min' => 'Salah om, minimal 3 karakter',
            'name.max' => 'Salah om, maksimal 20 karakter',
            'name.required' => 'Salah om, wajib diisi',

            'age.numeric' => 'Salah om, harus angka',
            'age.min' => 'Salah om, minimal 1 umurnya',
            'age.max' => 'Salah om, maksimal 90 umurnya',
            'age.required' => 'Salah om, wajib diisi',
        ]);
        // buatkan sebuah session umur agar data umur bisa diproses di middleware
        $request->session()
        ->put('umur', $request->input('age'));

        return redirect()->route('umur.sukses');

        // data hilang
    }

    public function sukses()
    {
        return view('umur.sukses');
    }


}
