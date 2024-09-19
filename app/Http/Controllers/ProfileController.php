<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile/index');

    }
}
