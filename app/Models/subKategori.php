<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subKategori extends Model
{
    use HasFactory;
    protected $table = 'sub_kategori';
    protected $fillable = [
        'id','nama', 'detail', 'gambar','kategori_id'
    ];

    protected $primaryKey = 'id';

    public function kategori(){
        return $this->belongsTo(Kategori::class,'kategori_id','id');
    }
}
