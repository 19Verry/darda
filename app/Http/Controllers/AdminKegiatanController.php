<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKegiatanController extends Controller
{
    public function index()
    {
        return view('admin.home.kegiatan');
    }
}
