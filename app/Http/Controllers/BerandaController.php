<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helper;
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
        // dd(response()->json(request()->cookie('shopping_cart')));
        // dd(Helper::getCart());  
        // foreach(Helper::getCart() as $key => $item){
        //     dd($item);
        // }
        return view('index', compact('produk', 'kategori', 'produkselect', 'testimonial'));
    }

    public function katalog(){
        $produk = Produk::all();
        $produkselect = Produk::with('kategori')->get();
        $kategori = Kategori::all();

        return view('katalog', compact('produk', 'kategori', 'produkselect'));
    }

    
}
