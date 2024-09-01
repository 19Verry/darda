<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumSma;

class AdminKurikulumSmaController extends Controller
{
    public function index()
    {
        $query = KurikulumSma::query()->get();
        return view('admin.bidang.kurikulum.sma' , ['KurikulumSma' => $query]);


    }
}
