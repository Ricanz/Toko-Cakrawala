<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonial::create([
            'id' => '1',
            'nama' => 'Riyanti Maulya',
            'perusahaan' => 'Cashtree',
            'deskripsi' => 'Kualitas barang sangat bagus',
            'gambar' => 'storage/Testimonial/contoh.jpg'
        ]);

        Testimonial::create([
            'id' => '2',
            'nama' => 'Erza Fahmi',
            'perusahaan' => 'Moonton',
            'deskripsi' => 'Kualitas barang sangat bagus',
            'gambar' => 'storage/Testimonial/contoh.jpg'
        ]);
    }
}
