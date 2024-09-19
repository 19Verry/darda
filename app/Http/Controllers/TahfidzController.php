<?php

namespace App\Http\Controllers;

use App\Models\BidangTahfidz;
use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class TahfidzController extends Controller
{
    public function index()
    {
        $tahfidz = BidangTahfidz::first();
        $HeaderFooter = HeaderFooter::first();
        return view('bidang/tahfidz' ,[
            'HeaderFooter' => $HeaderFooter,
            'tahfidz' => $tahfidz
        ]);

    }
}
