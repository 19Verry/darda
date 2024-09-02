<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KurikulumSmp;

class AdminKurikulumSmpController extends Controller
{
    public function index()
    {
        $query = KurikulumSmp::first();
        return view('admin.bidang.kurikulum.smp', ['KurikulumSmp' => $query]);

    }

    public function update(Request $request, KurikulumSmp $KurikulumSmp)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_kurikulum' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $KurikulumSmp->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/kurikulum/smp')->with('success', 'Data Kurikulum berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }

}