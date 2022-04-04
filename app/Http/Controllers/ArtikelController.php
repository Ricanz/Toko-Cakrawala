<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::all();
        return view('admin.artikel.index', compact('artikel'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.artikel.tambah');
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
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/artikel/". $file_name;
            $request->gambar->storeAs('public/artikel', $file_name);
        } else {
            $file_name = null;
        }
        Artikel::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'gambar' => $txt,
            'slug' => str_replace(' ', '-', strtolower($request->judul)),
        ]);
        return redirect()->route('artikel.index')
            ->with('success', 'Artikel Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikel = Artikel::find($id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'required',
        ]);

        $artikel = Artikel::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/artikel/". $file_name;
            $request->gambar->storeAs('public/artikel', $file_name);
        } else {
            $file_name = null;
        }
        // dd($request->judul, $request->isi);

        $artikel->judul = $request->judul;
        $artikel->isi = $request->isi;
        $artikel->gambar = $txt;
        $artikel->slug = str_replace(' ', '-', strtolower($request->judul));
        $artikel->save();

        return redirect()->route('artikel.index')
        ->with('edit', 'Artikel Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Artikel  $artikel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel = Artikel::findOrFail($id);
        Storage::delete("public/Artikel/$artikel->gambar");
        $artikel->delete();
        return redirect()->route('artikel.index')
            ->with('delete', 'Artikel Berhasil Dihapus');
    }
}
