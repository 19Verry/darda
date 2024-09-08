<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeFasilitas;

class AdminFasilitasController extends Controller
{
    public function index()
    { 
        $query = HomeFasilitas::query()->get();
        return view('admin.home.fasilitas' , ['HomeFasilitas' => $query]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif'
        ]);

        try {
            // Upload gambar
            $imageName = time().'.'.$request->gambar->extension();
            $request->gambar->move(public_path('assets/img/fasilitas'), $imageName);

            // Simpan data slideshow
            HomeFasilitas::create([
                'nama' => $validatedData['nama'],
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
}

