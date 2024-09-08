<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomePsb;

class AdminPsbController extends Controller
{
    public function index()
    {
        $query = HomePsb::first();
        return view('admin.home.psb' , ['HomePsb' => $query]);
    }

    public function update(Request $request, HomePsb $HomePsb)
    {
        // Debugging untuk memastikan model yang diterima
        // dd($BidangTahfidz);
        $validatedData = $request->validate([
            'judul' => 'required|string',
            'keterangan' => 'required|string',
        ]);

        // dd($validatedData);

        try {
            // Memperbarui data BidangTahfidz
            $HomePsb->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect('admin/home/psb')->with('success', 'Data Psb berhasil diperbarui.');

        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }

    }
}

