<?php

namespace App\Http\Controllers;

use App\Models\BidangKesantrian;
use Illuminate\Http\Request;

class AdminKesantrianController extends Controller
{
    public function index()
    {
        $query = BidangKesantrian::first();
        return view('admin.bidang.kesantrian', ['BidangKesantrian' => $query]);
    }
}