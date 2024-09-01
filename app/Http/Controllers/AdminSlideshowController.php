<?php

namespace App\Http\Controllers;

use App\Models\HomeSlideshow;
use Illuminate\Http\Request;

class AdminSlideshowController extends Controller
{
    public function index()
    {
        $query = HomeSlideshow::get();
        return view('admin.home.slideshow', [
            'Slideshow' => $query
        ]);
    }
}