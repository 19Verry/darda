<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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
            'role' => 'required|string|in:mudir,wakil_kesantrian,wakil_kurikulum,tu,calonsantri',
        ]);

        // Menggabungkan hasil validasi dan checkbox data
        $data = array_merge($validatedData);

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
            'role' => 'required|string|in:mudir,wakil_kesantrian,wakil_kurikulum,tu,calonsantri',
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

    public function showchangepassword()
    {
        return view('admin.user.ubah-password');
    }

    public function changePassword(Request $request)
    {
        // Validasi input
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        // Cek apakah password lama cocok
        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return back()->withErrors(['old_password' => 'Password lama tidak cocok']);
        }

        // Update password
        Auth::user()->update([
            'password' => Hash::make($request->new_password),
        ]);

        // Redirect dengan pesan sukses
        return back()->with('status', 'Password berhasil diubah');
    }

}
