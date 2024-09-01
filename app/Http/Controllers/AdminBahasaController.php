<?php

namespace App\Http\Controllers;

use App\Models\BidangBahasa;
use Illuminate\Http\Request;

class AdminBahasaController extends Controller
{
    public function index()
    {
        $query = BidangBahasa::first();
        return view('admin.bidang.bahasa', ['BidangBahasa' => $query]);
    }
}