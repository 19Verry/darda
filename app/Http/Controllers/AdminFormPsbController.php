<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formpsb;

class AdminFormPsbController extends Controller
{
    public function index()
    {
        $query = formpsb::query()->get();
        return view('admin.formpsb', ['formpsb' => $query]);
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'tahap1' => 'required|string',
            'tahap2' => 'required|string',
        ]);

        try {
            // Temukan data formpsb berdasarkan ID
            $formpsb = formpsb::findOrFail($id);

            // Memperbarui data formpsb
            $formpsb->update($validatedData);

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Tahap berhasil diubah.');
        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return back()->withErrors(['error' => 'Gagal memperbarui data: ' . $e->getMessage()]);
        }
    }
}