<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumSmp;

class AdminKurikulumSmpController extends Controller
{
    public function index()
    {
        $query = KurikulumSmp::query()->get();
        return view('admin.bidang.kurikulum.smp' , ['KurikulumSmp' => $query]);


    }
}
