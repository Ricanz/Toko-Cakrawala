<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $invoiceFile = "invoice.pdf";
        $invoicePath = public_path("invoices/".$invoiceFile);
        $pdf = PDF::loadView('print-invoice', $cart_data);
        $pdf->save($invoicePath);
        // $twilio = new Client(env('TWILIO_ACCOUNT_SID'), env('TWILIO_AUTH_TOKEN'));
        // $twilio->messages->create(
        //     "whatsapp:"."085735691018", [
        //         "from" => "whatsapp:".env('TWILIO_SANDBOX_NUMBER'),
        //         "body" => "Here's your invoice!",
        //     "mediaUrl" => [env("NGROK_URL")."/invoices/".$invoiceFile]
        //     ]
        // );
        // return view('print-invoice', compact('cart_data'))
        //     ->with('i', (request()->input('page', 1) - 1) * 5);
        return view('/')->with('success', 'Pesanan sedang diproses');
    }
}
