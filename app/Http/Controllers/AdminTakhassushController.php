<?php

namespace App\Http\Controllers;

use App\Models\ProdiTakhassush;
use Illuminate\Http\Request;

class AdminTakhassushController extends Controller
{
    public function index()
    {
        $query = ProdiTakhassush::first();
        return view('admin.home.prodi.takhassush', [
            'Takhassush' => $query
        ]);
    }

    public function update(Request $request, ProdiTakhassush $ProdiTakhassush)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'kop' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pendaftaran' => 'required|string',
            'uang_pangkal' => 'required|string',
            'uang_pakaian' => 'required|string',
            'uang_bulanan' => 'required|string',
            'uang_buku' => 'required|string',
        ]);

        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
            $file->move(public_path('assets/img/takhassush'), $filename);  // Simpan gambar ke folder 'assets/img/takhassush'
    
            // Periksa apakah ada gambar sebelumnya
            if ($ProdiTakhassush->gambar && file_exists(public_path('assets/img/takhassush/' . $ProdiTakhassush->gambar))) {
                try {
                    // Hapus gambar lama
                    unlink(public_path('assets/img/takhassush/' . $ProdiTakhassush->gambar));
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
            $ProdiTakhassush->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/home/prodi/takhassush')->with('success', 'Data Prodi Takhassush berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }
}