<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Cookie;
use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);
        return view('partials.side-cart')
            ->with('cart_data', $cart_data);
    }
    public function Cart()
    {
        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);
            return response()->json($cart_data);
        } else {
            $totalcart = "0";
            return response()->json($totalcart);
        }
    }

    public function addToCart(Request $request)
    {

        $produk_id = $request->input('produk_id');
        $jumlah_produk = $request->input('jumlah_produk');

        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        } else {
            $cart_data = array();
        }

        $data_cart = array_column($cart_data, 'item_id');
        $list_produk_id = $produk_id;

        if (in_array($list_produk_id, $data_cart)) {
            foreach ($cart_data as $keys => $values) {
                if ($cart_data[$keys]["item_id"] == $produk_id) {
                    $cart_data[$keys]["jumlah_produk"] = $request->input('jumlah_produk');
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    // return response()->json(['status' => '"' . $cart_data[$keys]["nama_produk"] . '" Already Added to Cart', 'status2' => '2']);
                    return back();
                }
            }
        } else {
            $produk = Produk::find($produk_id);
            $nama_produk = $produk->nama;
            $foto_produk = $produk->gambar;
            $harga_produk = $produk->harga;

            if ($produk) {
                $item_array = array(
                    'item_id' => $produk_id,
                    'nama_produk' => $nama_produk,
                    'jumlah_produk' => $jumlah_produk,
                    'harga_produk' => $harga_produk,
                    'foto_produk' => $foto_produk
                );
                $cart_data[] = $item_array;

                $item_data = json_encode($cart_data);
                $minutes = 60;
                Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                // return response()->json(['status' => '"' . $nama_produk . '" Added to Cart']);
                return back();
            }
        }
    }

    public function updateToCart(Request $request)
    {

        $produk_id = $request->input('produk_id');
        $jumlah_produk = $request->input('jumlah_produk');

        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);

            $data_cart = array_column($cart_data, 'item_id');
            $list_produk_id = $produk_id;

            if (in_array($list_produk_id, $data_cart)) {
                foreach ($cart_data as $keys => $values) {
                    if ($cart_data[$keys]["item_id"] == $produk_id) {
                        $cart_data[$keys]["jumlah_produk"] =  $jumlah_produk;
                        $item_data = json_encode($cart_data);
                        $minutes = 60;
                        Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                        return response()->json(['status' => '"' . $cart_data[$keys]["nama_produk"] . '" jumlah_produk Updated']);
                    }
                }
            }
        }
    }
    

    public function deleteFromCart($id)
    {

        $produk_id = $id;

        $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        $cart_data = json_decode($cookie_data, true);

        $data_cart = array_column($cart_data, 'item_id');
        $list_produk_id = $produk_id;

        if (in_array($list_produk_id, $data_cart)) {
            foreach ($cart_data as $keys => $values) {
                if ($cart_data[$keys]["item_id"] == $produk_id) {
                    unset($cart_data[$keys]);
                    $item_data = json_encode($cart_data);
                    $minutes = 60;
                    Cookie::queue(Cookie::make('shopping_cart', $item_data, $minutes));
                    return response()->json(['status' => 'Item Removed from Cart']);
                }
            }
        }
    }
    public function clearCart()
    {
        Cookie::queue(Cookie::forget('shopping_cart'));
        return response()->json(['status' => 'Keranjang Dibersihkan']);
    }
}
