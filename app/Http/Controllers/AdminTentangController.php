<?php

namespace App\Http\Controllers;

use App\Models\HomeTentang;
use Illuminate\Http\Request;

class AdminTentangController extends Controller
{
    public function index()
    {
        $query = HomeTentang::first();
        return view('admin.home.tentang-masyarakat', [
            'Tentang' => $query,
        ]);
    }
}