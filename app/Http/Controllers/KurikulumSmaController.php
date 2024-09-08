<?php

namespace App\Http\Controllers;

use App\Models\KurikulumSma;
use Illuminate\Http\Request;

class KurikulumSmaController extends Controller
{
    public function index()
    {
        $sma = KurikulumSma::first();
        return view('bidang/kurikulum/sma',[
            'sma' => $sma
        ]);

    }
}
