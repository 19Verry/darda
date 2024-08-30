<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurikulumSmpController extends Controller
{
    public function index()
    {
        return view('bidang/kurikulum/smp');
    }
}
