<?php

namespace App\Http\Controllers;

use App\Models\BidangKesantrian;
use Illuminate\Http\Request;

class KesantrianController extends Controller
{
    public function index()
    {
        $kesantrian = BidangKesantrian::first();
        return view('bidang/kesantrian',[
            'kesantrian' => $kesantrian
        ]);

    }
}