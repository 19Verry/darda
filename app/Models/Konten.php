<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konten extends Model
{
    use HasFactory;
public $timestamps = false;
    protected $fillable = [
        'judul',
        'caption',
        'gambar',
        'jenis',
        'path',
        'status',
    ];
}
