<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePrestasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'judul',
        'deskripsi'
    ];
}