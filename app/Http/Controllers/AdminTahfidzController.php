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
        // Validasi data yang diterima
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_tahfidz' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        try {
            // Jika ada file gambar yang diunggah
            if ($request->hasFile('gambar')) {
                // Hapus gambar lama jika ada
                if ($BidangTahfidz->gambar) {
                    $oldImagePath = public_path('assets/img/tahfidzs/' . $BidangTahfidz->gambar);
                    if (file_exists($oldImagePath)) {
                        unlink($oldImagePath); // Menghapus gambar lama
                    }
                }

                // Simpan gambar baru
                $imageName = time() . '.' . $request->gambar->extension();
                $request->gambar->move(public_path('assets/img/tahfidzs'), $imageName);

                // Update path gambar di $validatedData
                $validatedData['gambar'] = $imageName;
            }

            // Perbarui data BidangTahfidz di database
            $BidangTahfidz->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/tahfidz')->with('success', 'Data Bidang Tahfidz berhasil diperbarui.');
        } catch (\Exception $e) {
            // Tangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }
}
