<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $fillable = [
        'id', 'judul', 'sub_judul', 'banner', 'deskripsi', 'tombol', 'link', 'status', 'urutan', 'role'
    ];
}
