<?php

namespace App\Http\Controllers;

use App\Models\ProdiReguler;
use Illuminate\Http\Request;

class AdminRegulerController extends Controller
{
    public function index()
    {
        $query = ProdiReguler::first();
        return view('admin.home.prodi.reguler', [
            'Reguler' => $query
        ]);
    }
}