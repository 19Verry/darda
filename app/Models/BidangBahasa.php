<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangBahasa extends Model
{
    use HasFactory;
    protected $fillable = [
        'deskripsi',
        'kepala_bahasa',
        'masa_jabatan',
    ];
}