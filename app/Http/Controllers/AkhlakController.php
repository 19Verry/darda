<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkhlakController extends Controller
{
    public function index()
    {
        return view('bidang/akhlak');

    }
}