<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeKegiatan;

class AdminKegiatanController extends Controller
{
    public function index()
    {
        $query = HomeKegiatan::query()->get();
        return view('admin.home.kegiatan', ['HomeKegiatan' => $query]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        try {
            // Upload gambar
            $imageName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/img/kegiatan'), $imageName);

            // Simpan data slideshow
            HomeKegiatan::create([
                'judul' => $validatedData['judul'],
                'deskripsi' => $validatedData['deskripsi'],
                'gambar' => $imageName,
            ]);

            return redirect()->back()->with('success', 'Kegiatan berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal menambah Kegiatan: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $kegiatan = HomeKegiatan::find($id);

        if (!$kegiatan) {
            return redirect()->back()->with('error', 'kegiatan tidak ditemukan.');
        }

        try {
            // Menghapus kegiatan dari database
            $kegiatan->delete();

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'kegiatan berhasil dihapus.');
        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus kegiatan: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan kegiatan berdasarkan ID
        $kegiatan = HomeKegiatan::findOrFail($id);

        // Update judul dan deskripsi kegiatan
        $kegiatan->judul = $validatedData['judul'];
        $kegiatan->deskripsi = $validatedData['deskripsi'];

        // Jika ada gambar baru yang di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($kegiatan->gambar && file_exists(public_path('assets/img/kegiatan/' . $kegiatan->gambar))) {
                unlink(public_path('assets/img/kegiatan/' . $kegiatan->gambar));
            }

            // Simpan gambar baru
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/img/kegiatan'), $fileName);
            $kegiatan->gambar = $fileName;
        }

        // Simpan perubahan
        $kegiatan->save();

        return redirect()->back()->with('success', 'Kegiatan berhasil diubah.');
    }
}
