<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    public function index()
    {
        $Transaksi = Transaksi::all();
        return view('admin.Transaksi.index', compact('Transaksi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $Transaksi = Transaksi::all();
        return view('admin.Transaksi.tambah', compact('Transaksi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_pembeli' => 'required',
            'no_telp' => 'required',
            'alamat' => 'required',
            'foto' => 'required',
            'produk' => 'required',
            'total_harga' => 'required', 
        ]);

        $date = date("his");
        $extension = $request->file('foto')->extension();
        $file_name = "Transaksi_$date.$extension";
        $path = $request->file('foto')->storeAs('public/Transaksi', $file_name);

        Transaksi::create([
            'nama_pembeli' => $request->nama_pembeli,
            'no_telp' => $request->no_telp,
            'foto' => $file_name,
            'alamat' => $request->alamat,
            'total_harga' => $request->total_harga,
            'produk' => $request->produk,
        ]);
        return redirect()->route('Transaksi.index')
            ->with('success', 'Transaksi Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $Transaksis = Transaksi::where('id', $id)->first();
        return view('user.show', compact('Transaksi'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $Transaksi = Transaksi::find($id);
        $Transaksi = Transaksi::all();
        return view('admin.Transaksi.edit',compact('Transaksi','Transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_pembeli' => 'required',
            'no_telp' => 'required',
            'foto' => 'file|mimes:jpg,png,jpeg,gif,svg,jfif|max:2048',
            'alamat' => 'required',
            'produk' => 'required',
            'total_harga' => 'required',
        ]);

        $Transaksi = Transaksi::findOrFail($id);

        if ($request->has("foto")) {

            Storage::delete("public/Transaksi/$Transaksi->foto");

            $date = date("his");
            $extension = $request->file('foto')->extension();
            $file_name = "Transaksi_$date.$extension";
            $path = $request->file('foto')->storeAs('public/Transaksi', $file_name);
            
            $Transaksi->foto = $file_name;
        }

        $Transaksi->nama_pembeli = $request->nama_pembeli;
        $Transaksi->no_telp = $request->no_telp;
        $Transaksi->alamat = $request->alamat;
        $Transaksi->produk = $request->produk;
        $Transaksi->total_harga = $request->total_harga;
        $Transaksi->save();

        return redirect()->route('Transaksi.index')
        ->with('edit', 'Transaksi Berhasil Diedit');
    }

    public function destroy($id)
    {
        $Transaksi = Transaksi::findOrFail($id);
        Storage::delete("public/Transaksi/$Transaksi->foto");
        $Transaksi->delete();
        return redirect()->route('Transaksi.index')
            ->with('delete', 'Transaksi Berhasil Dihapus');
    }
}
