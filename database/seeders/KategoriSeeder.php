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
            'slug' => 'baja-ringan',
            'detail' => 'ini kategori baja ringan'
        ]);

        Kategori::create([
            'id' => '2',
            'nama' => 'Penutup Atap',
            'slug' => 'prnutup-atap',
            'detail' => 'ini kategori penutup atap'
        ]);

        Kategori::create([
            'id' => '3',
            'nama' => 'Alderon',
            'slug' => 'alderon',
            'detail' => 'ini kategori baja alderon'
        ]);

        Kategori::create([
            'id' => '4',
            'nama' => 'Plafon dan Langit-langit',
            'slug' => 'plafon-dan-langit-langit',
            'detail' => 'ini kategori plafon dan langit-langit'
        ]);

        Kategori::create([
            'id' => '5',
            'nama' => 'Conwood',
            'slug' => 'conwood',
            'detail' => 'ini kategori conwood'
        ]);
    }
}
