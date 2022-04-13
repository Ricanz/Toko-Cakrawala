<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function pemesanan(){
        $banner = Banner::where('status', 'aktif')->where('role', 'pemesanan')->first();

        return view('admin.banner.pemesanan', compact('banner'));
        // return 'Riyanti';
    }
}
