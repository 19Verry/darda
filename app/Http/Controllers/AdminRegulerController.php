<?php

namespace App\Http\Controllers;

use App\Models\ProdiReguler;
use Illuminate\Http\Request;

class AdminRegulerController extends Controller
{
    public function index()
    {
        $query = ProdiReguler::first();
        return view('admin.home.prodi.reguler', [
            'Reguler' => $query
        ]);
    }


    public function update(Request $request, ProdiReguler $ProdiReguler)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'kop' => 'required|string',
            'deskripsi' => 'required|string',
            'pendaftaran' => 'required|string',
            'uang_pangkal' => 'required|string',
            'uang_pakaian' => 'required|string',
            'uang_bulanan' => 'required|string',
            'uang_buku' => 'required|string',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $ProdiReguler->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/home/prodi/reguler')->with('success', 'Data Prodi Reguler berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }
}