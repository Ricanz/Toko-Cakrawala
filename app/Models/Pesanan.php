<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'invoice',
        'nama',
        'email',
        'alamat',
        'no_hp',
        'cart_data',
        'waktu'
    ];
}
