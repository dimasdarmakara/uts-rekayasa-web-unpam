<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        DB::table('produks')->insert([
            [
                'nama' => 'Produk 1',
                'harga' => 200000,
                'gambar' => 'assets/images/14.jpg',
                'deskripsi' => 'Deskripsi untuk Produk 1',
            ],
            [
                'nama' => 'Produk 2',
                'harga' => 250000,
                'gambar' => 'assets/images/8.jpg',
                'deskripsi' => 'Deskripsi untuk Produk 2',
            ],
            [
                'nama' => 'Produk 3',
                'harga' => 300000,
                'gambar' => 'assets/images/6.jpg',
                'deskripsi' => 'Deskripsi untuk Produk 3',
            ],
            [
                'nama' => 'Produk 4',
                'harga' => 150000,
                'gambar' => 'assets/images/14.jpg',
                'deskripsi' => 'Deskripsi untuk Produk 4',
            ],
            [
                'nama' => 'Produk 5',
                'harga' => 180000,
                'gambar' => 'assets/images/8.jpg',
                'deskripsi' => 'Deskripsi untuk Produk 5',
            ],
            [
                'nama' => 'Produk 6',
                'harga' => 220000,
                'gambar' => 'assets/images/14.jpg',
                'deskripsi' => 'Deskripsi untuk Produk 6',
            ],
        ]);
    }
}
