<?php

namespace App\Http\Helpers;

use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Request;

class Helper
{

    public static function getCart()
    {
        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);
            return $cart_data;
        } else {
            $totalcart = NULL;
            return $totalcart;
        }
    }

    public static function totalHarga()
    {
        // dd(Helper::getCart());
        $total = 0;
        foreach (Helper::getCart() as $item) {
            // dd($item->jumlah_produk);
            $harga = (int)$item['jumlah_produk'] + (int)$item['harga_produk'];
            $total = (int)$harga + (int)$harga;
        }
        return $total;
    }

    public static function totalPesanan()
    {
        // dd(Helper::getCart());
        $total = 0;
        foreach (Helper::getCart() as $item) {
            // dd($item->jumlah_produk);
            $total = (int)$total + (int)$item['jumlah_produk'];
        }
        return $total;
    }

    public static function countCart()
    {
        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);
            return $totalcart;
        } else {
            $totalcart = "0";
            return $totalcart;
        }
    }
    public static function getCookie(Request $request)
    {
        $value = $request->cookie('shopping_cart');
        echo $value;
    }
}
