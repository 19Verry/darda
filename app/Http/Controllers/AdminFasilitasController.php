<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminFasilitasController extends Controller
{
    public function index()
    {
        return view('admin.home.fasilitas');
    }
}
