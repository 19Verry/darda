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
            'status' => 'required|string',
        ]);

        // Temukan fasilitas berdasarkan ID
        $fasilitas = formpsb::findOrFail($id);

        // Update status fasilitas
        $fasilitas->status = $request->input('status');


        $fasilitas->save();

        return redirect()->back()->with('success', 'Status berhasil diUbah.');
    }

}