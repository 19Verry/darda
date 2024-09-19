<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;

class AdminHeaderFooterController extends Controller
{
    public function index()
    {
        $HeaderFooter = HeaderFooter::first();
        return view('admin/header-footer', data: ['HeaderFooter' => $HeaderFooter]);
    }

    public function render()
    {
        return view('components.header-official');
    }
    
    public function update(Request $request, HeaderFooter $HeaderFooter)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            // 'nama_mahad' => 'required|string',
            // 'warna_slideshow' => 'required|string',
            // 'warna_judul' => 'required|string',
            // 'warna_heading' => 'required|string',
            // 'warna_paragraph' => 'required|string',
            'nama_jalan' => 'required|string',
            'kelurahan_kecamatan_kota' => 'required|string',
            'no_hp' => 'required|string',
            'email' => 'required|string',
            'link_facebook' => 'required|string',
            'link_instagram' => 'required|string',
            'link_youtube' => 'required|string',
            'link_maps' => 'required|string',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $HeaderFooter->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/header-footer')->with('success', value: 'Data berhasil diperbarui.');
        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }
}
