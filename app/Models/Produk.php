<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'id','nama', 'harga', 'detail','stok','gambar','subkategori_id'
    ];

    protected $primaryKey = 'id';

    public function subkategori(){
        return $this->belongsTo(subKategori::class,'subkategori_id','id');
    }
}
