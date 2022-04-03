<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Twilio\Rest\Client;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
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
        // $cookie_data = stripslashes(Cookie::get('shopping_cart'));
        // $cart_data = json_decode($cookie_data, true);
        $length = 10;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }

        $invoice =  'INV-'.Str::upper($random);
        $invoiceFile = $invoice.".pdf";
        $invoicePath = public_path("invoices/".$invoiceFile);
        $pdf = PDF::loadView('print-invoice', compact('cart_data'))->save($invoicePath);
        $twilio = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
        $twilio->messages->create(
            "whatsapp:"."085735691018", [
                "from" => "whatsapp:".env('TWILIO_SANDBOX_NUMBER'),
                "body" => "Here's your invoice!",
            "mediaUrl" => [env("NGROK_URL")."/invoices/".$invoiceFile]
            ]
        );
        return redirect('/')->with('success', 'Pesanan sedang diproses');
    }
}
