<?php

use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\UmurController;
use App\Http\Middleware\UmurMiddleware;
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
    return "ini adalah output detail " . $parameter;
});

// parameter optional
Route::get('motor/{parameter?}', function ($data = null) {
    // return "ini adalah output detail motor";

    return view('motor', [
        'motor' => $data
    ]);
});


Route::get('tujuan', function () {
    return view('tujuan');
})->name('halaman.tujuan');

Route::prefix('training')->group(function () {

    Route::get('mtcna', function () {
        return 'ini adalah kelas mtcna';
    })->name('kelas.mtcna');

    Route::get('home', function () {
        return view('home');
    })->name('halaman.home');

    Route::get('ccna', function () {
        return 'ini adalah kelas ccna';
    })->name('kelas.ccna');

    Route::get('laravel', function () {
        return 'ini adalah kelas laravel';
    })->name('kelas.laravel');

});

// method = argumentnya cuma 2.
Route::get('kategori', [KategoriController::class, 'fahmi'])
    ->name('kategori');

Route::get('create', [KategoriController::class, 'create'])
    ->name('kategori');

Route::resource('product', ProdukController::class);

Route::get('product-cetak', [ProdukController::class, 'print']);


// route untuk umur
Route::prefix('umur')->group(function () {

    /**
     * 1 Buatkan route untuk form umur
     * 2.buatkan route untuk success
     * 3.buatkan method untuk mengatur atau mengolah data (Post)
     */

    // Route form

    Route::get('halaman-form', [UmurController::class, 'form'])
        ->name('umur.form');

    // ROute success
    Route::get('sukses', [UmurController::class, 'sukses'])
        ->middleware(UmurMiddleware::class)
        ->name('umur.sukses');

    // Route prosess
    Route::post('proses', [UmurController::class, 'proses'])
        ->name('umur.proses');
});