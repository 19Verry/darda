<?php

namespace App\Http\Controllers;

use App\Models\BidangKesantrian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log; // Impor Log

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
        // dd($BidangKesantrian); // Komentar sesuai model yang digunakan
        
        $validatedData = $request->validate([
            'deskripsi' => 'required|string',
            'kepala_kesantrian' => 'required|string|max:255',
            'masa_jabatan' => 'required|string|max:255',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
            $file->move(public_path('assets/img/kesantrian'), $filename);  // Simpan gambar ke folder 'assets/img/kesantrian'
    
            // Periksa apakah ada gambar sebelumnya
            if ($BidangKesantrian->gambar && file_exists(public_path('assets/img/kesantrian/' . $BidangKesantrian->gambar))) {
                try {
                    // Hapus gambar lama
                    unlink(public_path('assets/img/kesantrian/' . $BidangKesantrian->gambar));
                } catch (\Exception $e) {
                    // Log atau tampilkan pesan kesalahan jika gagal menghapus
                    Log::error("Gagal menghapus gambar: " . $e->getMessage());
                }
            }
    
            // Simpan nama gambar baru ke database
            $validatedData['gambar'] = $filename;
        }

        try {
            // Memperbarui data BidangKesantrian
            $BidangKesantrian->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/bidang/kesantrian')->with('success', 'Data Bidang Kesantrian berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }
}