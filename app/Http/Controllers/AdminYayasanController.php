<?php

namespace App\Http\Controllers;

use App\Models\HomeYayasan;
use Illuminate\Http\Request;

class AdminYayasanController extends Controller
{
    public function index()
    {
        $query = HomeYayasan::first();
        return view('admin.home.yayasan', [
            'Yayasan' => $query
        ]);
    }
}