<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function pemesanan(){
        $pemesanan = Banner::where('status', 'aktif')->where('role', 'pemesanan')->first();

        if(!$pemesanan){
            $banner = Banner::create([
                'banner' => '',
                'role' => 'pemesanan'
            ]);
        } else {
            $banner = $pemesanan;
        };

        return view('admin.banner.pemesanan', compact('banner'));
        // return 'Riyanti';
    }
}
