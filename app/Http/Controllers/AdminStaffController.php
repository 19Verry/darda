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
        $checkboxes = ['edit_prodi', 'edit_program', 'edit_kurikulum', 'edit_tahfidz', 'edit_kesantrian', 'edit_akhlak', 'edit_bahasa'];
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

}