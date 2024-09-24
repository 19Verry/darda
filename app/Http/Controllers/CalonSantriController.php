<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CalonSantriController extends Controller
{
    public function index()
    {
        $santris = User::latest()->get();
        return view('auth.login-psb', ['santris' => $santris]);
    }

    public function store(Request $request)
    {
        // Validate input with custom messages
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string',
        ]);

        // // Handle checkbox input with default value
        // $checkboxes = ['edit_prodi', 'edit_kurikulum_smp', 'edit_kurikulum_sma', 'edit_tahfidz', 'edit_kesantrian'];
        // $checkboxData = array_fill_keys($checkboxes, 0); // Default all checkboxes to 0

        // foreach ($checkboxes as $checkbox) {
        //     // Set the checkbox to 1 if it's checked
        //     $checkboxData[$checkbox] = $request->has($checkbox) ? 1 : 0;
        // }

        // Merge validation data with checkbox data
        $data = array_merge($validatedData);

        // Encrypt the password with Hash
        $data['password'] = Hash::make($data['password']);

        try {
            // Create a new user
            User::create($data);

            return redirect('/profile/index')->with('success', 'User berhasil dibuat.');
        } catch (\Exception $e) {
            // Log the error and return the error message
            Log::error('User creation failed: ' . $e->getMessage());

            return back()->withErrors(['error' => 'Gagal membuat user: ' . $e->getMessage()])
                ->withInput(); // Preserve input data
        }
    }

    public function destroy($id)
    {
        $santri = User::find($id);

        if (!$santri) {
            return redirect()->back()->with('error', 'User tidak ditemukan.');
        }

        try {
            // Delete the user from the database
            $santri->delete();

            return redirect()->back()->with('success', 'Calon Santri berhasil dihapus.');
        } catch (\Exception $e) {
            // Log the error and return the error message
            Log::error('Failed to delete user: ' . $e->getMessage());

            return redirect()->back()->withErrors(['error' => 'Gagal menghapus Calon Santri: ' . $e->getMessage()]);
        }
    }
}
