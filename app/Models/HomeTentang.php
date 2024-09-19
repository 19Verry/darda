<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeTentang extends Model
{
    use HasFactory;
    protected $fillable = [
        'gambar',
        'link_vidio',
        'visi_mahad',
        'misi_mahad',
        'jumlah_santri',
        'tahun_ajaran',
        'jumlah_ustad'
    ];
    
}
