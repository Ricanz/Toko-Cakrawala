<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelebihan;
use RealRashid\SweetAlert\Facades\Alert;

class KelebihanController extends Controller
{
    public function index()
    {
        $kelebihan = Kelebihan::get();
        return view('admin.kelebihan.index', compact('kelebihan'));
    }

    public function create()
    {
        return view('admin.kelebihan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'detail' => 'required',
        ]);
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Kelebihan/". $file_name;
            $request->gambar->storeAs('public/Kelebihan', $file_name);
        } else {
            $file_name = null;
        }

        Kelebihan::create([
            'judul' => $request->judul,
            'detail' => $request->detail,
            'gambar' => $txt
        ]);
        Alert::success('Success', 'Kelebihan berhasil ditambahkan!');
        return redirect()->route('kelebihan.index');
    }

    public function show($id)
    {
        $kelebihan = Kelebihan::where('id',$id)->get();
        return view('admin.kelebihan.detail', compact('kelebihan'));
    }

    public function edit($id)
    {
        $kelebihan = Kelebihan::where('id',$id)->get();
        return view('admin.kelebihan.edit', compact('kelebihan'));
    }

    public function update(Request $request, $id)
    {
        $kelebihan = Kelebihan::findOrfail($id);
        $kelebihan->judul = $request->judul;
        $kelebihan->detail = $request->detail;
        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/Kelebihan/". $file_name;
            $request->gambar->storeAs('public/Kelebihan', $file_name);
            $kelebihan = $txt;
        } else {
            $file_name = null;
        }
        $kelebihan->save();
        Alert::info('Success', 'Kelebihan berhasil diperbarui!');
        return redirect()->route('kelebihan.index');
    }

    public function delete($id)
    {
        Kelebihan::where('id', $id)->delete();
        Alert::warning('Success', 'Kelebihan berhasil dihapus!');
        return redirect()->route('kelebihan.index');
    }
}
