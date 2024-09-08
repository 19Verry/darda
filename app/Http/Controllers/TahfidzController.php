<?php

namespace App\Http\Controllers;

use App\Models\BidangTahfidz;
use Illuminate\Http\Request;

class TahfidzController extends Controller
{
    public function index()
    {
        $tahfidz = BidangTahfidz::first();
        return view('bidang/tahfidz' ,[
            'tahfidz' => $tahfidz
        ]);

    }
}