<?php

namespace App\Http\Controllers;

use App\Models\ProdiTakhassush;
use Illuminate\Http\Request;

class AdminTakhassushController extends Controller
{
    public function index()
    {
        $query = ProdiTakhassush::first();
        return view('admin.home.prodi.takhassush', [
            'Takhassush' => $query
        ]);
    }
}