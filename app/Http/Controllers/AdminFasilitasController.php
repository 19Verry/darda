<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeFasilitas;

class AdminFasilitasController extends Controller
{
    public function index()
    { 
        $query = HomeFasilitas::query()->get();
        return view('admin.home.fasilitas' , ['HomeFasilitas' => $query]);
    }
}

