<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminOrtuController extends Controller
{
    public function index()
    {
        $calonsantri = User::where('role', 'calonsantri')->get();
        // Kirim data ke view
        return view('admin.user.kontrol-ortu', ['calonsantri' => $calonsantri]);
    }
}