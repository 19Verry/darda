<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangTahfidz;

class AdminTahfidzController extends Controller
{
    public function index()
    {
        $query = BidangTahfidz::query()->get();
        return view('admin.bidang.tahfidz' , ['BidangTahfidz' => $query]);

    }
}
