<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPsbController extends Controller
{
    public function index()
    {
        return view('admin.home.psb');
    }
}
