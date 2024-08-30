<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminRegulerController extends Controller
{
    public function index()
    {
        return view('admin.home.prodi.reguler');
    }
}
