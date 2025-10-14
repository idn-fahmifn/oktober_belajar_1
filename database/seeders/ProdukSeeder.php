<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Produk::create([
        //     'nama_produk' => 'Laptop',
        //     'harga' => 25000000.00,
        //     'stok' => 10
        // ]);

        Produk::factory()->count(100)->create();


    }
}
