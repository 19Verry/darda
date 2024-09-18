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
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'kontak' => 'required|string|max:255',
        ]);

        // dd($validatedData);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
            $file->move(public_path('assets/img/kurikulum/sma'), $filename);  // Simpan gambar ke folder 'assets/img/kurikulum'

            // Periksa apakah ada gambar sebelumnya
            if ($KurikulumSma->gambar && file_exists(public_path('assets/img/kurikulum/sma' . $KurikulumSma->gambar))) {
                try {
                    // Hapus gambar lama
                    unlink(public_path('assets/img/kurikulum/sma' . $KurikulumSma->gambar));
                } catch (\Exception $e) {
                    // Log atau tampilkan pesan kesalahan jika gagal menghapus
                    Log::error("Gagal menghapus gambar: " . $e->getMessage());
                }
            }

            // Simpan nama gambar baru ke database
            $validatedData['gambar'] = $filename;
        }

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