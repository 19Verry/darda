<?php

namespace App\Http\Controllers;

use App\Models\BidangKesantrian;
use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class KesantrianController extends Controller
{
    public function index()
    {
        $kesantrian = BidangKesantrian::first();
        $HeaderFooter = HeaderFooter::first();
        return view('bidang/kesantrian',[
            'HeaderFooter' => $HeaderFooter,
            'kesantrian' => $kesantrian
        ]);

    }
}
