<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class InvoiceController extends Controller
{
    public function invoice()
    {
        if (Cookie::get('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
            $totalcart = count($cart_data);
        } else {
            $cart_data = null;
        }
        // dd($cart_data);
        return view('print-invoice', compact('cart_data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
