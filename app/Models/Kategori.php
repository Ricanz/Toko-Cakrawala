<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'id', 'nama', 'detail', 'gambar'
    ];

    protected $primaryKey = 'id';

    public function subkategori()
    {
        return $this->hasMany(subKategori::class);
    }

    public function produk()
    {
     return $this->hasMany(Produk::class);
    }
}
