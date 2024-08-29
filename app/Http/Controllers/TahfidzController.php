<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TahfidzController extends Controller
{
    public function index()
    {
        return view('bidang/tahfidz');

    }
}