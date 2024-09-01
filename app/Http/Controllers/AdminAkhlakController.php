<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangAkhlak;
;

class AdminAkhlakController extends Controller
{
    public function index()
    {
        $query = BidangAkhlak::first();
        return view('admin.bidang.akhlak', ['BidangAkhlak' => $query]);
    }
}