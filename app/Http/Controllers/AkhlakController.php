<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangAkhlak;

class AkhlakController extends Controller
{
    public function index()
    {
        $akhlak = BidangAkhlak::first();
        return view('bidang/akhlak', [
            'akhlak' => $akhlak
        ]);

    }
}