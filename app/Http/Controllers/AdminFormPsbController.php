<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formpsb;

class AdminFormPsbController extends Controller
{
    public function index()
    {
        $query = formpsb::query()->get();
        return view('admin.formpsb', ['formpsb' => $query]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'tahap1' => 'required|string',
            'tahap2' => 'required|string',
        ]);

        // Temukan fasilitas berdasarkan ID
        $fasilitas = formpsb::findOrFail($id);

        // Update status fasilitas
        $fasilitas->status = $request->input('tahap1', 'tahap2');


        $fasilitas->save();

        return redirect()->back()->with('success', 'Tahap berhasil diUbah.');
    }

}