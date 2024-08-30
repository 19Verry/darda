<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKurikulumSmaController extends Controller
{
    public function index()
    {
        return view('admin.bidang.kurikulum.sma');
    }
}
