<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\subKategori;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class BerandaController extends Controller
{
    public function beranda()
    {
        $produk = Produk::all();
        $produkselect = Produk::with('kategori')->get();
        $kategori = Kategori::all();
        $testimonial = Testimonial::all();
        return view('index', compact('produk', 'kategori', 'produkselect', 'testimonial'));
    }
    

}
