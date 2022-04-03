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

    public function produkKategori(Request $request){
        $produk = Produk::where('kategori_id', $request->id)->get();
        $kategori = Kategori::all();
        $nama_kategori = Kategori::where('id', $request->id)->first();

        return view('produk-kategori', compact('produk', 'kategori', 'nama_kategori'));
    }

    public function detailProduk(Request $request){
        $produk = Produk::findOrFail($request->id);
        $kategori = Kategori::all();
        $produkselect = Produk::with('kategori')->get();

        return view('detail_produk', compact('produk', 'kategori', 'produkselect'));
    }
    
}
