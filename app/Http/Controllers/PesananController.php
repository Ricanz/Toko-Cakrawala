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
        $cart_data = json_decode($pesanan, true);
        $totalcart = count($cart_data);
        dd($cart_data);
        return view('admin.pesanan.detail', compact('pesanan', 'cart_data'));
    }
}
