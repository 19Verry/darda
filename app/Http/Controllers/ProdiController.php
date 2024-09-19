<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProdiReguler;
use App\Models\ProdiTakhassush;
use App\Models\HeaderFooter;


class ProdiController extends Controller
{
    public function index()
    {
        $reguler = ProdiReguler::first();
        $takhassush = ProdiTakhassush::first();
        $HeaderFooter = HeaderFooter::first();
        return view('prodi', [
            'HeaderFooter' => $HeaderFooter,
            'reguler' => $reguler,
            'takhassush' => $takhassush
        ]);
    }
}
