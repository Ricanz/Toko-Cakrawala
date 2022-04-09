<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SupplierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $supplier = Supplier::all();
        return view('admin.supplier.index', compact('supplier'))
            ->with('i', (request()->input('page', 1) - 1) * 5);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.supplier.tambah');
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
            'supplier' => 'required',
            'gambar' => 'required',
        ]);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/supplier/". $file_name;
            $request->gambar->storeAs('public/supplier', $file_name);
        } else {
            $file_name = null;
        }
        Supplier::create([
            'supplier' => $request->supplier,
            'gambar' => $txt,
            'status' => 'aktif',
        ]);

        return redirect()->route('supplier.index')
            ->with('success', 'Supplier Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $supplier = Supplier::find($id);
        return view('admin.supplier.edit', compact('supplier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'supplier' => 'required',
            'gambar' => 'required',
        ]);

        $supplier = Supplier::find($id);

        if (isset($request->gambar)) {
            $extention = $request->gambar->extension();
            $file_name = time() . '.' . $extention;
            $txt = "storage/supplier/". $file_name;
            $request->gambar->storeAs('public/supplier', $file_name);
        } else {
            $file_name = null;
        }

        $supplier->supplier = $request->supplier;
        $supplier->gambar = $txt;
        $supplier->status = 'aktif';
        $supplier->save();

        return redirect()->route('supplier.index')
        ->with('edit', 'Supplier Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $supplier = Supplier::findOrFail($id);
        Storage::delete("public/supplier/$supplier->gambar");
        $supplier->delete();
        return redirect()->route('supplier.index')
            ->with('delete', 'Supplier Berhasil Dihapus');
    }
}
