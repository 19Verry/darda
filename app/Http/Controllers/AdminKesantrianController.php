<?php

namespace App\Http\Controllers;

use App\Models\BidangKesantrian;
use Illuminate\Http\Request;

class AdminKesantrianController extends Controller
{
    public function index()
    {
        $query = BidangKesantrian::first();
        return view('admin.bidang.kesantrian', ['BidangKesantrian' => $query]);
    }

    public function update(Request $request, BidangKesantrian $BidangKesantrian)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_kesantrian' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $BidangKesantrian->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/kesantrian')->with('success', 'Data Bidang Kesantrian berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }

}