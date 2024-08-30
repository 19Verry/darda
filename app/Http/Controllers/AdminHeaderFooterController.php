<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminHeaderFooterController extends Controller
{
    public function index()
    {
        return view('admin/header-footer');
    }
}
