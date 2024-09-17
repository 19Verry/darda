<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSejarah extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'link_video',
        'judul_deskripsi',
        'deskripsi',
        'judul_timeline',
        'timeline',
    ];

}
