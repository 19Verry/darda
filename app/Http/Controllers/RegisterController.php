<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function store(Request $request)
{
    // Validasi input dengan pesan kustom
    $validatedData = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
        'role' => 'required|string|in:calonsantri',
    ], [
        'name.required' => 'Nama wajib diisi.',
        'name.string' => 'Nama harus berupa string.',
        'name.max' => 'Nama tidak boleh lebih dari 255 karakter.',

        'email.required' => 'Email wajib diisi.',
        'email.email' => 'Format email tidak valid.',
        'email.max' => 'Email tidak boleh lebih dari 255 karakter.',
        'email.unique' => 'Email sudah terdaftar, gunakan email lain.',

        'password.required' => 'Password wajib diisi.',
        'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
        'password.confirmed' => 'Konfirmasi password tidak cocok.',

        'role.required' => 'Role wajib diisi.',
        'role.in' => 'Role tidak valid.',
    ]);

    // Enkripsi password dengan bcrypt
    $data = array_merge($validatedData);
    $data['password'] = bcrypt($data['password']);

    try {
        // Buat user baru
        User::create($data);

        return redirect('/login')->with('success', 'User berhasil dibuat.');
    } catch (\Exception $e) {
        // Tangani kesalahan dengan lebih baik
        return back()->withErrors(['error' => 'Gagal membuat user: ' . $e->getMessage()])
            ->withInput(); // Preserve input data
    }
}

}
