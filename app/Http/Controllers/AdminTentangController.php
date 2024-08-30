<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTentangController extends Controller
{
    public function index()
    {
        return view('admin.home.tentang-masyarakat');
    }
}
