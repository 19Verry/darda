<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSejarah extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul_deskripsi',
        'deskripsi',
        'judul_timeline',
        'timeline',
        'gambar',
        'link_video',
    ];

}