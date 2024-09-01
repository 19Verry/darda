<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeKegiatan;

class AdminKegiatanController extends Controller
{
    public function index()
    {
        $query = HomeKegiatan::query()->get();
        return view('admin.home.kegiatan' , ['HomeKegiatan' => $query]);
    }
}
