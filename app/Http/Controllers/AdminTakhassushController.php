<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminTakhassushController extends Controller
{
    public function index()
    {
        return view('admin.home.prodi.takhassush');
    }
}
