<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBahasaController extends Controller
{
    public function index()
    {
        return view('admin.bidang.bahasa');
    }
}
