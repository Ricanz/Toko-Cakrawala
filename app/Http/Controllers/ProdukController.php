<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\subKategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return view('admin.produk.index', compact('produk'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $subkategori = subKategori::all();
        return view('admin.produk.tambah', compact('subkategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'detail' => 'required',
            'stok' => 'required',
            'subkategori_id' => 'required',
            'gambar1' => 'required', 
        ]);

        $date = date("his");
        $extension = $request->file('gambar1')->extension();
        $file_name = "Produk_$date.$extension";
        $path = $request->file('gambar1')->storeAs('public/Produk', $file_name);

        Produk::create([
            'nama' => $request->nama,
            'detail' => $request->detail,
            'gambar' => $file_name,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'subkategori_id' => $request->subkategori_id,
        ]);
        return redirect()->route('produk.index')
            ->with('success', 'Produk Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $produk = Produk::where('id', $id)->first();
        return view('admin.produk.show', compact('produk'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $produk = Produk::find($id);
        $subkategori = subKategori::all();
        return view('admin.produk.edit',compact('produk','subkategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'gambar1' => 'file|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'harga' => 'required',
            'subkategori_id' => 'required',
            'stok' => 'required',
        ]);

        $Produk = Produk::findOrFail($id);

        if ($request->has("gambar1")) {

            Storage::delete("public/Produk/$Produk->gambar");

            $date = date("his");
            $extension = $request->file('gambar1')->extension();
            $file_name = "Produk_$date.$extension";
            $path = $request->file('gambar1')->storeAs('public/Produk', $file_name);
            
            $Produk->gambar = $file_name;
        }

        $Produk->nama = $request->nama;
        $Produk->detail = $request->detail;
        $Produk->harga = $request->harga;
        $Produk->subkategori_id = $request->subkategori_id;
        $Produk->stok = $request->stok;
        $Produk->save();

        return redirect()->route('produk.index')
        ->with('edit', 'Produk Berhasil Diedit');
    }

    public function destroy($id)
    {
        $Produk = Produk::findOrFail($id);
        Storage::delete("public/Produk/$Produk->gambar");
        $Produk->delete();
        return redirect()->route('produk.index')
            ->with('delete', 'Produk Berhasil Dihapus');
    }

    public function grid()
    {
        $produk = Produk::all();
        $subkategori = subKategori::all();
        return view('admin.produk.grid', compact('produk','subkategori'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
