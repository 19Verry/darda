<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KurikulumSma extends Model
{
    use HasFactory;

    protected $fillable = [
        'deskripsi',
        'kepala_kurikulum',
        'masa_jabatan',
        'gambar',
        'kontak',
    ];
    
}