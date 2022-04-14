<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helper;
use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\subKategori;
use App\Models\Supplier;
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
        $artikel = Artikel::all();
        $banner = Banner::where('status', 'aktif')->get();
        $supplier = Supplier::where('status', 'aktif')->get();
        // dd(response()->json(request()->cookie('shopping_cart')));
        // dd(Helper::getCart());  
        // foreach(Helper::getCart() as $key => $item){
        //     dd($item);
        // }
        return view('index', compact('produk', 'kategori', 'produkselect', 'testimonial', 'artikel', 'banner', 'supplier'));
    }

    public function katalog(){
        $produk = Produk::all();
        $produkselect = Produk::with('kategori')->get();
        $kategori = Kategori::all();

        return view('katalog', compact('produk', 'kategori', 'produkselect'));
    }

    public function produkKategori(Request $request){
        $id = Kategori::where('slug', $request->slug)->first();
        $produk = Produk::where('kategori_id', $id->id)->get();
        $kategori = Kategori::all();
        $select_kategori = Kategori::where('slug', $request->slug)->first();

        return view('produk-kategori', compact('produk', 'kategori', 'select_kategori'));
    }

    public function detailProduk(Request $request){
        $produk = Produk::where('slug', $request->slug)->first();
        $kategori = Kategori::all();
        $produkselect = Produk::with('kategori')->get();

        return view('detail_produk', compact('produk', 'kategori', 'produkselect'));
    }

    public function detailArtikel(Request $request){
        $artikel = Artikel::where('slug', $request->slug)->first();
        // dd($artikel);

        return view('detail_artikel', compact('artikel'));
    }
    
}
