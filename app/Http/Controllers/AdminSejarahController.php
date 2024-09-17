<?php

namespace App\Http\Controllers;

use App\Models\HomeSejarah;
use Illuminate\Http\Request;

class AdminSejarahController extends Controller
{
    public function index()
    {
        $sejarah = HomeSejarah::first(); // Variabel lebih deskriptif
        return view('admin.home.sejarah', [
            'Sejarah' => $sejarah
        ]);
    }

    public function update(Request $request, HomeSejarah $HomeSejarah)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'judul_deskripsi' => 'required|string',
            'deskripsi' => 'required|string',
            'judul_timeline' => 'required|string',
            'timeline' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Membuat gambar nullable agar tidak wajib
            'link_video' => 'required|string',
        ]);

        // Proses jika ada file gambar baru di-upload
        if ($request->hasFile('gambar')) {
            $file = $request->file('gambar');
            $filename = time() . '.' . $file->getClientOriginalExtension(); // Nama unik file
            $file->move(public_path('assets/img/sejarah'), $filename); // Simpan gambar ke folder

            // Hapus gambar lama jika ada
            if ($HomeSejarah->gambar && file_exists(public_path('assets/img/sejarah/' . $HomeSejarah->gambar))) {
                try {
                    unlink(public_path('assets/img/sejarah/' . $HomeSejarah->gambar)); // Menghapus gambar lama
                } catch (\Exception $e) {
                    Log::error("Gagal menghapus gambar: " . $e->getMessage()); // Log error jika gagal menghapus gambar lama
                }
            }

            // Update nama file gambar dalam data yang ter-validasi
            $validatedData['gambar'] = $filename;
        }

        try {
            // Update data pada model HomeSejarah
            $HomeSejarah->update($validatedData);

            // Redirect ke halaman dengan pesan sukses
            return redirect('admin/home/sejarah')->with('success', 'Data berhasil diperbarui.');
        } catch (\Exception $e) {
            // Tangani error jika gagal update
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }
}
