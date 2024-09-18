<?php

namespace App\Http\Controllers;

use App\Models\HomeYayasan;
use Illuminate\Http\Request;

class AdminYayasanController extends Controller
{
    public function index()
    {
        // Ambil data pertama dari tabel HomeYayasan
        $query = HomeYayasan::first();
        return view('admin.home.yayasan', [
            'Yayasan' => $query
        ]);
    }

    public function update(Request $request, HomeYayasan $HomeYayasan)
    {
        // Validasi input
        $validatedData = $request->validate([
            'gambar1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'gambar2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'gambar3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'judul_deskripsi' => 'required|string',
            'deskripsi' => 'required|string',
        ]);

        if ($request->hasFile('gambar1')) {
            $file = $request->file('gambar1');
            $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
            $file->move(public_path('assets/img/yayasan'), $filename);  // Simpan gambar1 ke folder 'assets/img/yayasan'
        
            // Periksa apakah ada gambar1 sebelumnya
            if ($HomeYayasan->gambar1 && file_exists(public_path('assets/img/yayasan/' . $HomeYayasan->gambar1))) {
                try {
                    // Hapus gambar1 lama
                    unlink(public_path('assets/img/yayasan/' . $HomeYayasan->gambar1));
                } catch (\Exception $e) {
                    // Log atau tampilkan pesan kesalahan jika gagal menghapus
                    \Log::error("Gagal menghapus gambar1: " . $e->getMessage());
                }
            }
        
            // Simpan nama gambar1 baru ke database
            $validatedData['gambar1'] = $filename;
        }

        if ($request->hasFile('gambar2')) {
            $file = $request->file('gambar2');
            $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
            $file->move(public_path('assets/img/yayasan'), $filename);  // Simpan gambar2 ke folder 'assets/img/yayasan'
        
            // Periksa apakah ada gambar2 sebelumnya
            if ($HomeYayasan->gambar2 && file_exists(public_path('assets/img/yayasan/' . $HomeYayasan->gambar2))) {
                try {
                    // Hapus gambar2 lama
                    unlink(public_path('assets/img/yayasan/' . $HomeYayasan->gambar2));
                } catch (\Exception $e) {
                    // Log atau tampilkan pesan kesalahan jika gagal menghapus
                    \Log::error("Gagal menghapus gambar2: " . $e->getMessage());
                }
            }
        
            // Simpan nama gambar2 baru ke database
            $validatedData['gambar2'] = $filename;
        }

        if ($request->hasFile('gambar3')) {
            $file = $request->file('gambar3');
            $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
            $file->move(public_path('assets/img/yayasan'), $filename);  // Simpan gambar3 ke folder 'assets/img/yayasan'
        
            // Periksa apakah ada gambar3 sebelumnya
            if ($HomeYayasan->gambar3 && file_exists(public_path('assets/img/yayasan/' . $HomeYayasan->gambar3))) {
                try {
                    // Hapus gambar3 lama
                    unlink(public_path('assets/img/yayasan/' . $HomeYayasan->gambar3));
                } catch (\Exception $e) {
                    // Log atau tampilkan pesan kesalahan jika gagal menghapus
                    \Log::error("Gagal menghapus gambar3: " . $e->getMessage());
                }
            }
        
            // Simpan nama gambar3 baru ke database
            $validatedData['gambar3'] = $filename;
        }

        try {
            // Update data HomeYayasan
            $HomeYayasan->update($validatedData);

            // Redirect dengan pesan sukses
            return redirect('admin/home/yayasan')->with('success', 'Data berhasil diperbarui.');
        } catch (\Exception $e) {
            // Tangani kesalahan jika ada
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }
}   
