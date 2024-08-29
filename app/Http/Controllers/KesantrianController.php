<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KesantrianController extends Controller
{
    public function index()
    {
        return view('bidang/kesantrian');

    }
}