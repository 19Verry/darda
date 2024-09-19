<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\HomePsb;

class PsbController extends Controller
{
    public function index()
    {
        $Homepsb = Homepsb::first();
        $HeaderFooter = HeaderFooter::first();
        return view('psb/psb', [
            'HeaderFooter' => $HeaderFooter,
            'Homepsb' => $Homepsb,
        ]);

    }
}
