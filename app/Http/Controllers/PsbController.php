<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\HomePsb;
use App\Models\FormPsb;
use Illuminate\Support\Facades\Auth; // Pastikan untuk mengimpor Auth

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

// app/Http/Controllers/PsbController.php
public function showPsbForm(Request $request)
{
    // Cek apakah user sudah login
    if (!Auth::check()) {
        return redirect()->route('login');
    }

    // Ambil email dari user yang sedang login
    $email = $request->user()->email;

    // Cek apakah email sudah ada di dalam database
    if (FormPsb::where('email', $email)->exists()) {
        return redirect()->route('finishpsb')->with('message', 'Anda sudah terdaftar dalam Penerimaan Santri Baru.');
    }

    // Tampilkan form PSB jika email belum ada
    return redirect()->route('psb'); // Menggunakan route name
}


}
