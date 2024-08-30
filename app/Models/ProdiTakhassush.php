<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdiTakhassush extends Model
{
    use HasFactory;

    protected $fillable = [
        'kop',
        'deskripsi',
        'pendaftaran',
        'uang_pangkal',
        'uang_pakaian',
        'uang_bulanan',
        'uang_buku'
    ];

}