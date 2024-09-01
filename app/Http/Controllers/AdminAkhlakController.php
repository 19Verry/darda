<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangAkhlak;;

class AdminAkhlakController extends Controller
{
    public function index()
    {
        $query = BidangAkhlak::query()->get();
        return view('admin.bidang.akhlak' , ['BidangAkhlak' => $query]);
    }
}
