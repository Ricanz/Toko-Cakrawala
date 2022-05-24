<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banner = Banner::where('role', 'banner')->get();
        return view('admin.banner.index', compact('banner'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
            'banner' => 'required',
        ]);

        if (isset($request->banner)) {
            $extention = $request->banner->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/banner/". $file_name;
            $request->banner->storeAs('public/banner', $file_name);
        } else {
            $file_name = null;
        }
        $banner = Banner::create([
            'judul' => $request->judul,
            'sub_judul' => $request->sub_judul,
            'deskripsi' => $request->deskripsi,
            'banner' => $txt,
            'status' => 'aktif',
            'tombol' => $request->tombol,
            'link' => $request->link,
            'urutan' => $request->urutan,
            'role' => 'banner'
        ]);

        return redirect()->route('banner.index')
            ->with('success', 'Banner Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);

        if (!$request->banner) {
            $extention = $request->banner->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/artikel/". $file_name;
            $request->banner->storeAs('public/artikel', $file_name);
            $banner->banner = $txt;
        }
        // dd($request->judul, $request->isi);

        $banner->judul = $request->judul;
        $banner->sub_judul = $request->sub_judul;
        $banner->deskripsi = $request->deskripsi;

        $banner->tombol = $request->tombol;
        $banner->link = $request->link;
        $banner->urutan = $request->urutan;
        $banner->status = 'aktif';
        $banner->save();

        return redirect()->route('banner.index')
        ->with('edit', 'Banner Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        Storage::delete("public/banner/$banner->gambar");
        $banner->delete();
        return redirect()->route('banner.index')
            ->with('delete', 'Banner Berhasil Dihapus');
    }
}
