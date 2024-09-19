<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\formpsb;

class UpdateFormPsbController extends Controller
{
    public function index()
    {
        $formpsb = formpsb::first();
        $HeaderFooter = HeaderFooter::first();
        return view('psb/updateform', [
            'HeaderFooter' => $HeaderFooter,
            'formpsb' => $formpsb,
        ]);

    }
}
