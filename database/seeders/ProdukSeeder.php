<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Produk::create([
            'id' => '1',
            'nama' => 'Besi 1',
            'harga' => '200000',
            'detail' => 'Ini besi',
            'stok' => '100',
            'slug' => 'besi-1',
            'gambar' => 'storage/Produk/contoh.jpg',
            'kategori_id' => '1'
        ]);

        Produk::create([
            'id' => '2',
            'nama' => 'Beton',
            'harga' => '200000',
            'detail' => 'Ini beton',
            'stok' => '100',
            'slug' => 'beton',
            'gambar' => 'storage/Produk/contoh.jpg',
            'kategori_id' => '1'
        ]);

        Produk::create([
            'id' => '3',
            'nama' => 'Baja',
            'harga' => '200000',
            'detail' => 'Ini baja',
            'stok' => '100',
            'slug' => 'baja',
            'gambar' => 'storage/Produk/contoh.jpg',
            'kategori_id' => '2'
        ]);

        Produk::create([
            'id' => '4',
            'nama' => 'Baja 2',
            'harga' => '200000',
            'detail' => 'Ini baja',
            'stok' => '100',
            'slug' => 'baja-2',
            'gambar' => 'storage/Produk/contoh.jpg',
            'kategori_id' => '2'
        ]);

        Produk::create([
            'id' => '5',
            'nama' => 'Baja Ringan',
            'harga' => '200000',
            'detail' => 'Ini baja ringan',
            'stok' => '100',
            'slug' => 'baja-ringan',
            'gambar' => 'storage/Produk/contoh.jpg',
            'kategori_id' => '3'
        ]);

    }
}
