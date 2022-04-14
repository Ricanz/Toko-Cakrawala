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


}
