<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kategori::create([
            'id' => '1',
            'nama' => 'Besi Beton',
            'detail' => 'ini kategori besi beton'
        ]);

        Kategori::create([
            'id' => '2',
            'nama' => 'Baja',
            'detail' => 'ini kategori baja'
        ]);

        Kategori::create([
            'id' => '3',
            'nama' => 'Baja Ringan',
            'detail' => 'ini kategori baja ringan'
        ]);

        Kategori::create([
            'id' => '4',
            'nama' => 'Paku dan Kawat',
            'detail' => 'ini kategori paku dan kawat'
        ]);

        Kategori::create([
            'id' => '5',
            'nama' => 'Atap',
            'detail' => 'ini kategori atap'
        ]);

        Kategori::create([
            'id' => '6',
            'nama' => 'Technics & Tools',
            'detail' => 'ini kategori technics & tools'
        ]);

        Kategori::create([
            'id' => '7',
            'nama' => 'Safety Equipment',
            'detail' => 'ini kategori safety equipment'
        ]);
    }
}
