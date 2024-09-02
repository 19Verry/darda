<?php

namespace App\Http\Controllers;

use App\Models\BidangBahasa;
use Illuminate\Http\Request;

class AdminBahasaController extends Controller
{
    public function index()
    {
        $query = BidangBahasa::first();
        return view('admin.bidang.bahasa', ['BidangBahasa' => $query]);
    }

    public function update(Request $request, BidangBahasa $BidangBahasa)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_bahasa' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $BidangBahasa->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/bahasa')->with('success', 'Data Bidang Bahasa berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }

}