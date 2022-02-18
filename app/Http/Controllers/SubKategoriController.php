<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\subKategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubKategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::with(['subkategori'])->get();
        $subKategori = subKategori::all();   
        return view('admin.kategori.sub.index', compact('kategori','subKategori'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $kategori = subKategori::all();
        return view('admin.kategori.tambah', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            'kategori_id' => 'required'
            // 'gambar' => 'required',
        ]);

        // $date = date("his");
        // $extension = $request->file('gambar')->extension();
        // $file_name = "Kategori_$date.$extension";
        // $path = $request->file('gambar')->storeAs('public/Kategori', $file_name);

        subKategori::create([
            'nama' => $request->nama,
            'detail' => $request->detail,
            'kategori_id' => $request->kategori_id,
            // 'gambar' => $file_name,
        ]);
        return redirect()->route('subKategori.index')
            ->with('success', 'Kategori Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Kategori = subKategori::where('id', $id)->first();
        return view('user.show', compact('Kategori'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function edit($id)
    {
        $Kategori = subKategori::find($id);
        return view('admin.Kategori.edit',compact('Kategori'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'detail' => 'required',
            // 'gambar' => 'file|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
        ]);

        $Kategori = subKategori::findOrFail($id);

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
        // $Kategori->gambar = $request->gambar;
        $Kategori->save();

        return redirect()->route('Kategori.index')
        ->with('edit', 'Kategori Berhasil Diedit');
    }

    public function destroy($id)
    {
        $Kategori = subKategori::findOrFail($id);
        Storage::delete("public/Kategori/$Kategori->gambar");
        $Kategori->delete();
        return redirect()->route('Kategori.index')
            ->with('delete', 'Kategori Berhasil Dihapus');
    }
}
