<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeYayasan extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_deskripsi',
        'deskripsi',
        'gambar1',
        'gambar2',
        'gambar3',
    ];
}