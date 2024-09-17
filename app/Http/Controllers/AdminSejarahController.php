<?php

namespace App\Http\Controllers;

use App\Models\HomeSejarah;
use Illuminate\Http\Request;

class AdminSejarahController extends Controller
{
    public function index()
    {
        $query = HomeSejarah::first();
        return view('admin.home.sejarah', [
            'Sejarah' => $query
        ]);
    }
}