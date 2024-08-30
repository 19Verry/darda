<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPrestasiController extends Controller
{
    public function index()
    {
        return view('admin.home.prestasi');
    }
}
