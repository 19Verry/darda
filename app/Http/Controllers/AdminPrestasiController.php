<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePrestasi;

class AdminPrestasiController extends Controller
{
    public function index()
    {
        $query = HomePrestasi::query()->get();
        return view('admin.home.prestasi', ['HomePrestasi' => $query]);
    }
}
