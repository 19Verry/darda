<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\HomePsb;
use App\Models\FormPsb;

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

    public function showPsbForm(Request $request)
    {
        // Cek apakah email sudah ada di dalam database
        $email = $request->user()->email; // Ambil email dari user yang sedang login

        if (FormPsb::where('email', $email)->exists()) {
            // Redirect jika email sudah ada
            return redirect()->route('finishpsb')->with('message', 'Anda sudah terdaftar dalam Penerimaan Santri Baru.');
        }

        // Tampilkan form PSB jika email belum ada
        return view('psb');
    }

}
