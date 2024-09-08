<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdiReguler;
use App\Models\ProdiTakhassush;


class ProdiController extends Controller
{
    public function index()
    {
        $reguler = ProdiReguler::first();
        $takhassush = ProdiTakhassush::first();
        return view('prodi', [
            'reguler' => $reguler,
            'takhassush' => $takhassush
        ]);
    }
}