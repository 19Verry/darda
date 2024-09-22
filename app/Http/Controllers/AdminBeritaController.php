<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;

class AdminBeritaController extends Controller
{
    public function index()
    {
        $query = Berita::query()->get();
        return view('admin.home.berita', ['Berita' => $query]);
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
            $request->gambar->move(public_path('assets/img/berita'), $imageName);

            // Simpan data slideshow
            Berita::create([
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
        $berita = Berita::find($id);

        if (!$berita) {
            return redirect()->back()->with('error', 'berita tidak ditemukan.');
        }

        try {
            // Menghapus berita dari database
            $berita->delete();
            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'berita berhasil dihapus.');
        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus berita: ' . $e->getMessage()]);
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

        // Temukan berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Update judul dan deskripsi berita
        $berita->judul = $validatedData['judul'];
        $berita->deskripsi = $validatedData['deskripsi'];

        // Jika ada gambar baru yang di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($berita->gambar && file_exists(public_path('assets/img/berita/' . $berita->gambar))) {
                unlink(public_path('assets/img/berita/' . $berita->gambar));
            }

            // Simpan gambar baru
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/img/berita'), $fileName);
            $berita->gambar = $fileName;
        }

        // Simpan perubahan
        $berita->save();

        return redirect()->back()->with('success', 'berita berhasil diubah.');
    }
}
