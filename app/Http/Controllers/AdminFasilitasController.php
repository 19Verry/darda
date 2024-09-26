<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeFasilitas;

class AdminFasilitasController extends Controller
{
    public function index()
    {
        $query = HomeFasilitas::query()->get();
        return view('admin.home.fasilitas', ['HomeFasilitas' => $query]);
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
            $request->gambar->move(public_path('assets/img/fasilitas'), $imageName);

            // Simpan data slideshow
            HomeFasilitas::create([
                'judul' => $validatedData['judul'],
                'deskripsi' => $validatedData['deskripsi'],
                'gambar' => $imageName,
            ]);

            return redirect()->back()->with('success', 'Fasilitas berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal menambah Fasilitas: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $fasilitas = HomeFasilitas::find($id);

        if (!$fasilitas) {
            return redirect()->back()->with('error', 'fasilitas tidak ditemukan.');
        }

        try {
            // Menghapus fasilitas dari database
            $fasilitas->delete();

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'fasilitas berhasil dihapus.');
        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus fasilitas: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string',
            'deskripsi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Temukan fasilitas berdasarkan ID
        $fasilitas = HomeFasilitas::findOrFail($id);

        // Update judul fasilitas
        $fasilitas->judul = $request->input('judul');
        $fasilitas->deskripsi = $request->input('deskripsi');

        // Jika ada gambar baru yang di-upload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($fasilitas->gambar && file_exists(public_path('assets/img/fasilitas/' . $fasilitas->gambar))) {
                unlink(public_path('assets/img/fasilitas/' . $fasilitas->gambar));
            }

            // Simpan gambar baru
            $fileName = time() . '.' . $request->gambar->extension();
            $request->gambar->move(public_path('assets/img/fasilitas'), $fileName);
            $fasilitas->gambar = $fileName;
        }

        $fasilitas->save();

        return redirect()->back()->with('success', 'Fasilitas berhasil diUbah.');
    }
}
