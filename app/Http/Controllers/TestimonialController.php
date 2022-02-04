<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonial.index', compact('testimonial'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonial.tambah', compact('testimonial'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'perusahaan' => 'required',
            'gambar' => 'required', 
        ]);

        $date = date("his");
        $extension = $request->file('gambar')->extension();
        $file_name = "testimonial_$date.$extension";
        $path = $request->file('gambar')->storeAs('public/Testimonial', $file_name);

        Testimonial::create([
            'nama' => $request->nama,
            'perusahaan' => $request->perusahaan,
            'gambar' => $file_name,
            'deskripsi' => $request->deskripsi,
        ]);
        return redirect()->route('testimonial.index')
            ->with('success', 'testimonial Berhasil Ditambahkan');
    }
    public function show($id)
    {
        $testimonial = Testimonial::where('id', $id)->first();
        return view('admin.testimonial.show', compact('testimonial'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        return view('admin.testimonial.edit',compact('testimonial','testimonial'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'perusahaan' => 'required',
            'deskripsi' => 'required',
        ]);

        $testimonial = Testimonial::findOrFail($id);

        if ($request->has("gambar")) {

            Storage::delete("public/testimonial/$testimonial->gambar");

            $date = date("his");
            $extension = $request->file('gambar')->extension();
            $file_name = "testimonial_$date.$extension";
            $path = $request->file('gambar')->storeAs('public/Testimonial', $file_name);
            
            $testimonial->gambar = $file_name;
        }

        $testimonial->nama = $request->nama;
        $testimonial->perusahaan = $request->perusahaan;
        $testimonial->deskripsi = $request->deskripsi;
        $testimonial->save();

        return redirect()->route('testimonial.index')
        ->with('edit', 'testimonial Berhasil Diedit');
    }

    public function destroy($id)
    {
        $testimonial = Testimonial::findOrFail($id);
        Storage::delete("public/testimonial/$testimonial->gambar");
        $testimonial->delete();
        return redirect()->route('testimonial.index')
            ->with('delete', 'testimonial Berhasil Dihapus');
    }

    public function grid()
    {
        $testimonial = Testimonial::all();
        return view('admin.testimonial.grid', compact('testimonial','testimonial'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
