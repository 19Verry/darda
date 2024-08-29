<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeFasilitas extends Model
{
    use HasFactory;

    protected $fillable = [
        'gambar',
        'nama'
    ];
}