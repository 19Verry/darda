<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\Berita;
use App\Models\Pengumuman;
use App\Models\HomeTentang;
use App\Models\HomeKegiatan;
use App\Models\Homeberita;public function update(Request $request, $id)
{
    // Validasi input
    $validatedData = $request->validate([
        'judul' => 'required|string|max:255',
        'deskripsi' => 'required|string',
        'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Temukan prestasi berdasarkan ID
    $prestasi = HomePrestasi::findOrFail($id);

    // Update judul dan deskripsi prestasi
    $prestasi->judul = $validatedData['judul'];
    $prestasi->deskripsi = $validatedData['deskripsi'];

    // Jika ada gambar baru yang di-upload
    if ($request->hasFile('gambar')) {
        // Hapus gambar lama jika ada
        if ($prestasi->gambar && file_exists(public_path('assets/img/prestasi/' . $prestasi->gambar))) {
            unlink(public_path('assets/img/prestasi/' . $prestasi->gambar));
        }

        // Simpan gambar baru
        $fileName = time() . '.' . $request->gambar->extension();
        $request->gambar->move(public_path('assets/img/prestasi'), $fileName);
        $prestasi->gambar = $fileName;
    }

    // Simpan perubahan
    $prestasi->save();

    return redirect()->back()->with('success', 'Prestasi berhasil diubah.');
}
use App\Models\HomeSlideshow;

class BeritaController extends Controller
{
    public function index()
    {
        $kegiatan = HomeKegiatan::query()->get();
        $berita = Homeberita::query()->get();
        $pengumuman = Pengumuman::query()->get();
        $tentang = HomeTentang::first();
        $slideshow = HomeSlideshow::get();
        $berita = Berita::query()->get();
        $HeaderFooter = HeaderFooter::first();
        return view('home', [
            'kegiatan' => $kegiatan,
            'berita' => $berita,
            'HeaderFooter' => $HeaderFooter,
            'berita' => $berita,
            'tentang' => $tentang,
            'slideshow' => $slideshow,
            'pengumuman' => $pengumuman,

        ]);
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
        $berita = Homeberita::findOrFail($id);

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
