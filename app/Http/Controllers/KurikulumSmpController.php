<?php

namespace App\Http\Controllers;

use App\Models\KurikulumSmp;
use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class KurikulumSmpController extends Controller
{
    public function index()
    {
        $smp = KurikulumSmp::first();
        $HeaderFooter = HeaderFooter::first();
        return view('bidang/kurikulum/smp',[
            'HeaderFooter' => $HeaderFooter,
            'smp' => $smp
        ]);
    }
}
