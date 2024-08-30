<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminAkhlakController extends Controller
{
    public function index()
    {
        return view('admin.bidang.akhlak');
    }
}
