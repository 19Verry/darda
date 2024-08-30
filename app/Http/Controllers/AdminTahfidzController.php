<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTahfidzController extends Controller
{
    public function index()
    {
        return view('admin.bidang.tahfidz');
    }
}
