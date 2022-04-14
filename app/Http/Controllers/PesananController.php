<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesanan;

class PesananController extends Controller
{
    public function index()
    {
        $pesanan = Pesanan::latest()->get();
        return view('admin.pesanan.index', compact('pesanan'));
    }

    public function detail($id)
    {
        $pesanan = Pesanan::select('cart_data')->where('id', $id)->first();
        $cart_data = json_decode($pesanan->cart_data, true);
        $totalcart = count($cart_data);
        foreach ($cart_data as $key => $i){
           $data[] = $i;
        }
        // dd($i['nama_produk']);
        return view('admin.pesanan.detail', compact('pesanan', 'cart_data'));
    }
}
