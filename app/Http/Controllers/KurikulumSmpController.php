<?php

namespace App\Http\Controllers;

use App\Models\KurikulumSmp;
use Illuminate\Http\Request;

class KurikulumSmpController extends Controller
{
    public function index()
    {
        $smp = KurikulumSmp::first();
        return view('bidang/kurikulum/smp',[
            'smp' => $smp
        ]);
    }
}
