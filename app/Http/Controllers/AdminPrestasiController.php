<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePrestasi;

class AdminPrestasiController extends Controller
{
    public function index()
    {
        $query = HomePrestasi::query()->get();
        return view('admin.home.prestasi', ['HomePrestasi' => $query]);
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
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('assets/img/prestasi'), $imageName);

            // Simpan data slideshow
            HomePrestasi::create([
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
        $prestasi = HomePrestasi::find($id);

        if (!$prestasi) {
            return redirect()->back()->with('error', 'prestasi tidak ditemukan.');
        }

        try {
            // Menghapus prestasi dari database
            $prestasi->delete();

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'prestasi berhasil dihapus.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus prestasi: ' . $e->getMessage()]);
        }

    }
}
