<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Carbon;
use App\Models\Pesanan;
use Illuminate\Support\Facades\File;
class InvoiceController extends Controller
{
    public function invoice(Request $request)
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

        $data = [
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'alamat' => $request->get('alamat'),
            'no_hp' => $request->get('no_hp')
        ];
        $tanggal = Carbon::now()->toDateTimeString();

        $length = 10;
        $random = '';
        for ($i = 0; $i < $length; $i++) {
            $random .= rand(0, 1) ? rand(0, 9) : chr(rand(ord('a'), ord('z')));
        }

        $invoice =  'INV-'.Str::upper($random);
        $invoiceFile = $invoice.".pdf";
        $invoicePath = ("invoices/".$invoiceFile);
        $pdf = PDF::loadView('print-invoice', compact('cart_data', 'invoice', 'data', 'tanggal'))->save($invoicePath);

        Mail::send('email-seller', compact('data'), function ($message) use($pdf, $invoice) {
            $message->from('toko.cakrawala@outlook.com');
            $message->to('toko.cakrawala@outlook.com', 'Invoice')
            ->subject("Pemesanan ".$invoice)
            ->attachData($pdf->output(), $invoice.".pdf");
        });
        Mail::send('email-buyer', compact('data'), function ($message) use($pdf, $invoice, $request) {
            $message->from('toko.cakrawala@outlook.com');
            $message->to($request->email, 'Invoice')
            ->subject("Pemesanan ".$invoice)
            ->attachData($pdf->output(), $invoice.".pdf");
        });

        Pesanan::create([
            'invoice' => $invoice,
            'nama' => $request->get('nama'),
            'email' => $request->get('email'),
            'alamat' => $request->get('alamat'),
            'no_hp' => $request->get('no_hp'),
            'cart_data' => $cookie_data
        ]);

        File::delete($invoicePath);

        return redirect('/')->with('success', 'Pesanan sedang diproses');
    }
}
