<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BidangTahfidz extends Model
{
    use HasFactory;
    protected $fillable = ['deskripsi', 'kepala_tahfidz', 'masa_jabatan'];
}