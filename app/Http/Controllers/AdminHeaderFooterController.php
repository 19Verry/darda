<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class AdminHeaderFooterController extends Controller
{
    public function index()
    {
        $query = HeaderFooter::first();
        return view('admin/header-footer', ['HeaderFooter' => $query]);
    }

    public function render()
    {
        return view('components.header-official');
    }
}
