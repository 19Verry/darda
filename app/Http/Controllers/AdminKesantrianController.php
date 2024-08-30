<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKesantrianController extends Controller
{
    public function index()
    {
        return view('admin.home.kegiatan');
    }
}
