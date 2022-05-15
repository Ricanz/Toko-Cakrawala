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
                'deskripsi' => 'BANNER CARA PEMESANAN'
            ]);
        } else {
            $banner = $pemesanan;
        };

        return view('admin.banner.pemesanan', compact('banner'));
    }

    public function updatePemesanan(Request $request){
        $banner = Banner::where('status', 'aktif')->where('role', 'pemesanan')->first();
// dd($banner);
        if (isset($request->banner)) {
            $extention = $request->banner->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/". $file_name;
            $request->banner->storeAs('public/banner', $file_name);
        } else {
            $txt = $banner->banner;
        }
        // dd($request->judul, $request->isi);

        $banner->judul = $request->judul;
        $banner->banner = $txt;
        $banner->status = 'aktif';
        $banner->save();

        return redirect()->route('pemesanan')
        ->with('edit', 'Banner Berhasil Diedit');
    }
}
