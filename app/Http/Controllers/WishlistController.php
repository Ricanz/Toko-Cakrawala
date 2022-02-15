<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index() 
    {
        $wishlist = Wishlist::all();
        return view('user.wishlist', compact('wishlist'));
    }

    public function create()
    {
        return view('admin.wishlist.tambah');
    }

    public function store(Request $request)
    {   
        $id=$request->id; $time=60*24*14; /*60 * 24 * 14 = 14 drays 60=minutes 24=hours 14=days*/
        $value=0;
        if( Cookie::get('wishlist')!==null ){
            $anonim=Cookie::get('wishlist');
            Wishlist::insert(["anonim"=>$anonim,"product_id"=>$id]);
            return 0;
        }else{
            $value = Wishlist::max("anonim")+1;
            if(empty($value)){
                $value=0;
            }
            Wishlist::insert(["anonim"=>$value,"product_id"=>$id]);
            $cookie = cookie('cart', $value, $time);
            return response()->cookie($cookie);
        }
    
    }

    public function show($id)
    {
        $wishlist = Wishlist::where('id', $id)->first();
        return view('admin.wishlist.show', compact('wishlist'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


    public function edit($id)
    {
        $wishlist = Wishlist::find($id);
        return view('admin.wishlist.edit',compact('wishlist','kode'));
    }

    public function update(Request $request, $id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->produk_id = $request->produk_id;
        $wishlist->user_id = $request->user_id;
        $wishlist->save();

        return redirect()->route('wishlist.index')
        ->with('edit', 'wishlist Berhasil Diedit');
    }

    public function destroy($id)
    {
        Wishlist::where('id', $id)->delete();

        return redirect()->route('wishlist.index')
            ->with('delete', 'wishlist Berhasil Dihapus');
    }
}
