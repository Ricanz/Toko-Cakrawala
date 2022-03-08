<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\subKategori;

class SubKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        subKategori::create([
            'id' => '1',
            'nama' => 'abc',
            'detail' => 'ini detail',
            'gambar' => 'abc',
            'kategori_id' => 1
            
        ]);
    }
}
