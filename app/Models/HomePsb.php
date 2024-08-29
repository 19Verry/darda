<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePsb extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'keterangan'
    ];
}