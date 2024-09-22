<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeaderFooter extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_mahad',
        // 'warna_slideshow',
        // 'warna_judul',
        // 'warna_heading',
        // 'warna_paragraph',
        'nama_jalan',
        'kelurahan_kecamatan_kota',
        'no_hp',
        'email',
        'link_facebook',
        'link_instagram',
        'link_youtube',
        'link_maps',
    ];
}
