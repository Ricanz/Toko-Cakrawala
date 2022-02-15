<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    use HasFactory;
    protected $table = 'wishlist';
    protected $fillable = [
        'anonim', 'produk_id'
    ];

    protected $primaryKey = 'id';


    public function produk(){
        return $this->belongsTo(Produk::class,'produk_id','id');
    }
}
