<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BidangTahfidz;

class AdminTahfidzController extends Controller
{
    public function index()
    {
        $query = BidangTahfidz::first();
        return view('admin.bidang.tahfidz', ['BidangTahfidz' => $query]);

    }

    public function update(Request $request, BidangTahfidz $BidangTahfidz)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_tahfidz' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $BidangTahfidz->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/tahfidz')->with('success', 'Data Bidang Tahfidz berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }

}