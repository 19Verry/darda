<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumSmaController extends Controller
{
    public function index()
    {
        return view('bidang/kurikulum/sma');
    }
}
