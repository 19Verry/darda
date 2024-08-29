<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BahasaController extends Controller
{
    public function index()
    {
        return view('bidang/bahasa');

    }
}