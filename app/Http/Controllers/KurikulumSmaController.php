<?php

namespace App\Http\Controllers;

use App\Models\KurikulumSma;
use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class KurikulumSmaController extends Controller
{
    public function index()
    {
        $sma = KurikulumSma::first();
        $HeaderFooter = HeaderFooter::first();
        return view('bidang/kurikulum/sma',[
            'HeaderFooter' => $HeaderFooter,
            'sma' => $sma
        ]);

    }
}
