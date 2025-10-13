<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('profile', function () {

    // jika profile dipanggil, maka akan menampilkan :
    $data = 'Hallo ini adalah data';
    // return "Ini adalah resoin profile";
    return $data; //menampilkan nilai data
})->name('halaman-profile');

Route::get('nama-halaman', function () {
    
    $data = 'ini adalah judul';
    $desc = 'ini adalah aplikasi pertamaku dengan laravel';

    // menampilkan di halaman profile
    // return view('profile', compact('data', 'desc'));

    return view('profile', [
        'data' => $data,
        'desc' => $desc
    ]);
});

// parameter wajib
Route::get('barang/{param}', function ($nama_barang) {
    $parameter = $nama_barang;
    return "ini adalah output detail ".$parameter;
});

// parameter optional
Route::get('motor/{parameter?}', function ($data = null) {
    // return "ini adalah output detail motor";

    return view('motor', [
        'motor' => $data
    ]);
});

Route::get('home', function(){
    return view('home');
});

Route::get('tujuan', function(){
    return view('tujuan');
});

