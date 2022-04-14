<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::with(['subkategori'])->get();
        return view('admin.kategori.main.index', compact('kategori'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            // 'gambar' => 'required',
        ]);

        // $date = date("his");
        // $extension = $request->file('gambar')->extension();
        // $file_name = "Kategori_$date.$extension";
        // $path = $request->file('gambar')->storeAs('public/Kategori', $file_name);

        Kategori::create([
            'nama' => $request->nama,
            'detail' => $request->detail,
            'slug' => str_replace(' ', '-', strtolower($request->nama)),
            // 'gambar' => $file_name,
        ]);
        return redirect()->route('kategori.index')
            ->with('success', 'Kategori Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Kategori = Kategori::where('id', $id)->first();
        return view('user.show', compact('Kategori'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $Kategori = Kategori::find($id);
        return view('admin.Kategori.edit',compact('Kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            // 'gambar' => 'file|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
        ]);

        $Kategori = Kategori::findOrFail($id);

        // if ($request->has("gambar")) {

        //     Storage::delete("public/Kategori/$Kategori->gambar");

        //     $date = date("his");
        //     $extension = $request->file('gambar')->extension();
        //     $file_name = "Kategori_$date.$extension";
        //     $path = $request->file('gambar')->storeAs('public/Kategori', $file_name);
            
        //     $Kategori->gambar = $file_name;
        // }

        $Kategori->nama = $request->nama;
        $Kategori->detail = $request->detail;
        $Kategori->slug = str_replace(' ', '-', strtolower($request->nama));
        // $Kategori->gambar = $request->gambar;
        $Kategori->save();

        return redirect()->route('Kategori.index')
        ->with('edit', 'Kategori Berhasil Diedit');
    }

    public function destroy($id)
    {
        $Kategori = Kategori::findOrFail($id);
        Storage::delete("public/Kategori/$Kategori->gambar");
        $Kategori->delete();
        return redirect()->route('kategori.index')
            ->with('delete', 'Kategori Berhasil Dihapus');
    }
}
