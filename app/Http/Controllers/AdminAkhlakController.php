<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangAkhlak;

class AdminAkhlakController extends Controller
{
    public function index()
    {
        $query = BidangAkhlak::first();
        return view('admin.bidang.akhlak', ['BidangAkhlak' => $query]);
    }

    public function update(Request $request, BidangAkhlak $BidangAkhlak)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_akhlak' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $BidangAkhlak->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/akhlak')->with('success', 'Data Bidang Akhlak berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }

}