<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function pemesanan(){
        $pemesanan = Banner::where('status', 'aktif')->where('role', 'pemesanan')->first();
        $pemesananDetail = Banner::where('status', 'aktif')->where('role', 'pemesanan-detail')->first();

        if(!$pemesanan){
            $banner = Banner::create([
                'banner' => '',
                'deskripsi' => 'BANNER CARA PEMESANAN',
                'judul' => 'Cara Pemesanan',
                'role' => 'pemesanan'
            ]);
        } else {
            $banner = $pemesanan;
        };
        if(!$pemesananDetail){
            $bannerDetail = Banner::create([
                'banner' => '',
                'deskripsi' => 'BANNER CARA PEMESANAN',
                'judul' => 'Cara Pemesanan',
                'role' => 'pemesanan-detail'
            ]);
        } else {
            $bannerDetail = $pemesananDetail;
        }
        return view('admin.banner.pemesanan', compact('banner', 'bannerDetail'));
    }

    public function updatePemesanan(Request $request){
        $banner = Banner::where('status', 'aktif')->where('role', 'pemesanan')->first();
        $bannerDetail = Banner::where('status', 'aktif')->where('role', 'pemesanan-detail')->first();
        if (isset($request->banner)) {
            $extention = $request->banner->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/". $file_name;
            $request->banner->storeAs('public/banner', $file_name);
        } else {
            $txt = $banner->banner;
        }
        if (isset($request->detail)) {
            $extentionDetail = $request->detail->extension();
            $file_nameDetail = time() . '.' . $extentionDetail;
            $txtDetail = "storage/banner/". $file_nameDetail;
            $request->detail->storeAs('public/banner', $file_nameDetail);
        } else {
            $txtDetail = $bannerDetail->banner;
        }
        $banner->judul = $request->judul;
        $banner->banner = $txt;
        $banner->status = 'aktif';
        $banner->save();

        $bannerDetail->banner = $txtDetail;
        $bannerDetail->judul = $bannerDetail->judul;
        $bannerDetail->status = 'aktif';
        $bannerDetail->save();

        return redirect()->route('pemesanan')
        ->with('edit', 'Banner Berhasil Diedit');
    }
}
