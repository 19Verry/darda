<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminKurikulumSmpController extends Controller
{
    public function index()
    {
        return view('admin.bidang.kurikulum.smp');
    }
}
