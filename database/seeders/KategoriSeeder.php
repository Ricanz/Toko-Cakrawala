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
            'nama' => 'Baja Ringan',
            'detail' => 'ini kategori baja ringan'
        ]);

        Kategori::create([
            'id' => '2',
            'nama' => 'Penutup Atap',
            'detail' => 'ini kategori penutup atap'
        ]);

        Kategori::create([
            'id' => '3',
            'nama' => 'Alderon',
            'detail' => 'ini kategori baja alderon'
        ]);

        Kategori::create([
            'id' => '4',
            'nama' => 'Plafon dan Langit-langit',
            'detail' => 'ini kategori plafon dan langit-langit'
        ]);

        Kategori::create([
            'id' => '5',
            'nama' => 'Conwood',
            'detail' => 'ini kategori conwood'
        ]);
    }
}
