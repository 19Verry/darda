<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumSma;

class AdminKurikulumSmaController extends Controller
{
    public function index()
    {
        $query = KurikulumSma::first();
        return view('admin.bidang.kurikulum.sma', ['KurikulumSma' => $query]);
    }

    public function update(Request $request, KurikulumSma $KurikulumSma)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_kurikulum' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
            'kontak' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $KurikulumSma->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/kurikulum/sma')->with('success', 'Data Kurikulum berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }

}