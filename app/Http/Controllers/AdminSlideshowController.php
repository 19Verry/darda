<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminSlideshowController extends Controller
{
    public function index()
    {
        return view('admin.home.slideshow');
    }
}
