<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminCalonSantriController extends Controller
{
    public function index()
    {
        // Ambil data dari database di mana role adalah calonsantri
        $calonsantri = User::where('role', 'calonsantri')->get();

        // Kirim data ke view
        return view('admin.user.kontrol-ortu', ['calonsantri' => $calonsantri]);

    }
}
