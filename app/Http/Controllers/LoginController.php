<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'name' => ['required', 'string'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Ambil user yang sedang login
            $user = Auth::user();

            // Periksa role pengguna
            if ($user->role !== 'calonsantri') {
                // Jika role bukan 'calon santri', arahkan ke /admin
                return redirect()->intended('/admin');
            } else {
                // Jika role 'calon santri', arahkan ke halaman default
                return redirect()->intended('/profile');
            }
        }

        return back()->withErrors([
            'name' => 'Nama atau password salah.',
        ])->withInput();
    }
}
