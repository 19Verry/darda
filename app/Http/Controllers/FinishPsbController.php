<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;


class FinishPsbController extends Controller
{
    public function index()
    {
        $HeaderFooter = HeaderFooter::first();
        return view('psb/finishpsb', [
            'HeaderFooter' => $HeaderFooter,
        ]);

    }
}
