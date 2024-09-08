<?php

namespace App\Http\Controllers;

use App\Models\HomeTentang;
use Illuminate\Http\Request;

class AdminTentangController extends Controller
{
    public function index()
    {
        $query = HomeTentang::first();
        return view('admin.home.tentang-masyarakat', [
            'HomeTentang' => $query,
        ]);
    }

    public function update(Request $request, HomeTentang $HomeTentang)
{
    $validatedData = $request->validate([
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'link_vidio' => 'nullable|url',
        'visi_mahad' => 'required|string',
        'misi_mahad' => 'required|string',
        'jumlah_santri' => 'required|integer',
        'jumlah_ustad' => 'required|integer',
    ]);

    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '.' . $file->getClientOriginalExtension();  // Buat nama unik untuk file
        $file->move(public_path('assets/img/tentang'), $filename);  // Simpan gambar ke folder 'assets/img/tentang'
    
        // Periksa apakah ada gambar sebelumnya
        if ($HomeTentang->gambar && file_exists(public_path('assets/img/tentang/' . $HomeTentang->gambar))) {
            try {
                // Hapus gambar lama
                unlink(public_path('assets/img/tentang/' . $HomeTentang->gambar));
            } catch (\Exception $e) {
                // Log atau tampilkan pesan kesalahan jika gagal menghapus
                \Log::error("Gagal menghapus gambar: " . $e->getMessage());
            }
        }
    
        // Simpan nama gambar baru ke database
        $validatedData['gambar'] = $filename;
    }
    

    try {
        // Update data HomeTentang
        $HomeTentang->update($validatedData);

        // Redirect dengan pesan sukses
        return redirect('admin/home/tentang-masyarakat')->with('success', 'Data berhasil diperbarui.');

    } catch (\Exception $e) {
        // Tangani kesalahan jika ada
        return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
    }
}

}