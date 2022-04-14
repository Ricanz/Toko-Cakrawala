<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function pemesanan(){
        $banner = Banner::where('status', 'aktif')->where('role', 'pemesanan')->first();

        if(!$banner){
            Banner::create([
                'banner' => '',
                'role' => 'pemesanan'
            ]);
        }

        return view('admin.banner.pemesanan', compact('banner'));
    }

    public function update_cara_pemesanan(Request $request){
        // $request->validate([
        //     'judul' => 'required',
        //     'deskripsi' => 'required',
        //     'banner' => 'required',
        // ]);

        $banner = Banner::where('role', 'pemesanan')->first();

        if (isset($request->banner)) {
            $extention = $request->banner->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/". $file_name;
            $request->banner->storeAs('public/banner', $file_name);
        } else {
            $file_name = '';
        }

        $banner->judul = $request->judul;
        $banner->banner = $txt;
        $banner->status = 'aktif';
        $banner->save();

        return redirect()->route('banner.index')
        ->with('edit', 'Banner Berhasil Diedit');
    }
}
