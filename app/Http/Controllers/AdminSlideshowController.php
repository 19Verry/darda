<?php

namespace App\Http\Controllers;

use App\Models\HomeSlideshow;
use Illuminate\Http\Request;

class AdminSlideshowController extends Controller
{
    public function index()
    {
        $query = HomeSlideshow::get();
        return view('admin.home.slideshow', [
            'Slideshow' => $query
        ]);
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
            $request->gambar->move(public_path('assets/img/hero-carousel'), $imageName);

            // Simpan data slideshow
            HomeSlideshow::create([
                'judul' => $validatedData['judul'],
                'deskripsi' => $validatedData['deskripsi'],
                'gambar' => $imageName,
            ]);

            return redirect()->back()->with('success', 'Slideshow berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal menambah slideshow: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $slideshow = HomeSlideshow::find($id);

        if (!$slideshow) {
            return redirect()->back()->with('error', 'Slideshow tidak ditemukan.');
        }

        // Menghapus slideshow dari database
        $slideshow->delete();

        try {
            // Menghapus slideshow dari database
            $slideshow->delete();

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Slideshow berhasil dihapus.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus slideshow: ' . $e->getMessage()]);
        }

    }
}