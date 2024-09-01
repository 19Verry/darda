<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePsb;

class AdminPsbController extends Controller
{
    public function index()
    {
        $query = HomePsb::query()->get();
        return view('admin.home.psb' , ['HomePsb' => $query]);
    }
}

