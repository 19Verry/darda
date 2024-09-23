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
                ->withInput(); // Preserve input dataf
        }
    }

    public function destroy($id)
    {
        $staff = User::find($id);
        if ($staff) {
            $staff->delete();
            return redirect()->back()->with('success', 'Staff berhasil dihapus.');
        }

        return redirect()->back()->with('error', 'Staff tidak ditemukan.');
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $validatedData = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'role' => 'required|string|in:mudir,wakil_kesantrian,wakil_kurikulum,tu',
        ]);
    
        // Temukan staff berdasarkan ID
        $staff = User::findOrFail($id);
    
        // Update nama, email, dan role staff
        $staff->name = $validatedData['nama'];
        $staff->email = $validatedData['email'];
        $staff->role = $validatedData['role'];
    
        // Simpan perubahan
        $staff->save();
    
        return redirect()->back()->with('success', 'Staff berhasil diubah.');
    }
    

}


