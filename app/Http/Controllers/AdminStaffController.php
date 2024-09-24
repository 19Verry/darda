<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminStaffController extends Controller
{
    public function index()
    {
        $staffs = User::latest()->get();
        return view('admin.user.kontrol-staff', ['staffs' => $staffs]);
    }

    public function store(Request $request)
    {
        // Validasi input dengan pesan kustom
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
        ]);

        // Set nilai boolean untuk tiap checkbox
        $checkboxes = ['edit_prodi', 'edit_kurikulum_smp', 'edit_kurikulum_sma', 'edit_tahfidz', 'edit_kesantrian'];
        $checkboxData = array_fill_keys($checkboxes, 0); // Default all checkboxes to 0

        foreach ($checkboxes as $checkbox) {
            // Mengatur nilai boolean untuk checkbox
            if ($request->has($checkbox) && $request->input($checkbox) == '1') {
                $checkboxData[$checkbox] = 1;
            }
        }

        // Menggabungkan hasil validasi dan checkbox data
        $data = array_merge($validatedData, $checkboxData);

        // Enkripsi password dengan bcrypt
        $data['password'] = bcrypt($data['password']);

        try {
            // Buat user baru
            User::create($data);

            return redirect('/admin/user/staff')->with('success', 'User berhasil dibuat.');
        } catch (\Exception $e) {
            // Tangani kesalahan dengan lebih baik
            return back()->withErrors(['error' => 'Gagal membuat user: ' . $e->getMessage()])
                ->withInput(); // Preserve input data
        }
    }
    public function destroy($id)
    {
        $staff = User::find($id);

        if (!$staff) {
            return redirect()->back()->with('error', 'user tidak ditemukan.');
        }

        try {
            // Menghapus staff dari database
            $staff->delete();

            // Redirect ke halaman sebelumnya dengan pesan sukses
            return redirect()->back()->with('success', 'Staff berhasil dihapus.');
        } catch (\Exception $e) {
            // Menangani pengecualian jika ada kesalahan
            return redirect()->back()->withErrors(['error' => 'Gagal menghapus Staff: ' . $e->getMessage()]);
        }
    }

}
