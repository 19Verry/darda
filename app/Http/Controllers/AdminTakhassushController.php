<?php

namespace App\Http\Controllers;

use App\Models\ProdiTakhassush;
use Illuminate\Http\Request;

class AdminTakhassushController extends Controller
{
    public function index()
    {
        $query = ProdiTakhassush::first();
        return view('admin.home.prodi.takhassush', [
            'Takhassush' => $query
        ]);
    }

    public function update(Request $request, ProdiTakhassush $ProdiTakhassush)
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
            $ProdiTakhassush->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/home/prodi/takhassush')->with('success', 'Data Prodi Takhassush berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }
}