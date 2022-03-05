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
