<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengumuman;

class AdminPengumumanController extends Controller
{
    public function index()
    {
        $query = Pengumuman::query()->get();
        return view('admin.home.pengumuman', ['Pengumuman' => $query]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'pdf' => 'required|mimes:pdf' // Menghapus batasan ukuran file
        ]);

        try {
            // Upload PDF
            $pdfName = time() . '.' . $request->pdf->extension();
            $request->pdf->move(public_path('assets/pdf/pengumuman'), $pdfName);

            // Simpan data pengumuman
            Pengumuman::create([
                'judul' => $validatedData['judul'],
                'pdf' => $pdfName, // Simpan nama file PDF
            ]);

            return redirect()->back()->with('success', 'Pengumuman berhasil ditambahkan.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal menambah pengumuman: ' . $e->getMessage()]);
        }
    }

    public function destroy($id)
    {
        $pengumuman = Pengumuman::find($id);

        if (!$pengumuman) {
            return redirect()->back()->with('error', 'Pengumuman tidak ditemukan.');
        }

        try {
            // Hapus file PDF jika ada
            if ($pengumuman->pdf && file_exists(public_path('assets/pdf/pengumuman/' . $pengumuman->pdf))) {
                unlink(public_path('assets/pdf/pengumuman/' . $pengumuman->pdf));
            }

            // Hapus pengumuman dari database
            $pengumuman->delete();
            return redirect()->back()->with('success', 'Pengumuman berhasil dihapus.');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus pengumuman: ' . $e->getMessage()]);
        }
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'pdf' => 'nullable|mimes:pdf' // Menghapus batasan ukuran file pada update
        ]);

        // Temukan pengumuman berdasarkan ID
        $pengumuman = Pengumuman::findOrFail($id);

        // Update judul pengumuman
        $pengumuman->judul = $validatedData['judul'];

        // Jika ada PDF baru yang di-upload
        if ($request->hasFile('pdf')) {
            // Hapus PDF lama jika ada
            if ($pengumuman->pdf && file_exists(public_path('assets/pdf/pengumuman/' . $pengumuman->pdf))) {
                unlink(public_path('assets/pdf/pengumuman/' . $pengumuman->pdf));
            }

            // Simpan PDF baru
            $pdfName = time() . '.' . $request->pdf->extension();
            $request->pdf->move(public_path('assets/pdf/pengumuman'), $pdfName);
            $pengumuman->pdf = $pdfName;
        }

        // Simpan perubahan
        $pengumuman->save();

        return redirect()->back()->with('success', 'Pengumuman berhasil diubah.');
    }
}
