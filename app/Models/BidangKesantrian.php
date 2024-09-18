<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangKesantrian extends Model
{
    use HasFactory;
    protected $fillable = [
        'deskripsi',
        'kepala_kesantrian',
        'masa_jabatan',
        'gambar',
    ];
}