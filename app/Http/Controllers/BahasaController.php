<?php

namespace App\Http\Controllers;

use App\Models\BidangBahasa;
use Illuminate\Http\Request;
class BahasaController extends Controller
{
    public function index()
    {
        $bahasa = BidangBahasa::first();
        return view('bidang/bahasa',[
            'bahasa' => $bahasa
        ]);

    }
}
