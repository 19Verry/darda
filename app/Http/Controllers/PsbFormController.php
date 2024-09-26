<?php

namespace App\Http\Controllers;

use App\Models\FormPsb; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = FormPsb::first(); 

        return view('profile.index', compact('profile'));
    }

    public function edit($id)
    {
        $profile = FormPsb::findOrFail($id);

        return view('profile.edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        $profile = FormPsb::findOrFail($id);
        $profile->update($request->all());

        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function updateFiles(Request $request, $id)
    {
        $request->validate([
            'foto_3x4' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'upload_ijazah' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'upload_kk' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'upload_akte' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
            'upload_rapor_kelas_5' => 'nullable|file|mimes:pdf,jpeg,png,jpg|max:2048',
        ]);

        $profile = FormPsb::findOrFail($id);

        // Update the images/files
        if ($request->hasFile('foto_3x4')) {
            if ($profile->foto_3x4) {
                Storage::delete('public/assets/img/formpsb/' . $profile->foto_3x4);
            }
            $profile->foto_3x4 = $request->file('foto_3x4')->store('assets/img/formpsb', 'public');
        }

        if ($request->hasFile('upload_ijazah')) {
            if ($profile->upload_ijazah) {
                Storage::delete('public/assets/img/formpsb/' . $profile->upload_ijazah);
            }
            $profile->upload_ijazah = $request->file('upload_ijazah')->store('assets/img/formpsb', 'public');
        }

        if ($request->hasFile('upload_kk')) {
            if ($profile->upload_kk) {
                Storage::delete('public/assets/img/formpsb/' . $profile->upload_kk);
            }
            $profile->upload_kk = $request->file('upload_kk')->store('assets/img/formpsb', 'public');
        }

        if ($request->hasFile('upload_akte')) {
            if ($profile->upload_akte) {
                Storage::delete('public/assets/img/formpsb/' . $profile->upload_akte);
            }
            $profile->upload_akte = $request->file('upload_akte')->store('assets/img/formpsb', 'public');
        }

        if ($request->hasFile('upload_rapor_kelas_5')) {
            if ($profile->upload_rapor_kelas_5) {
                Storage::delete('public/assets/img/formpsb/' . $profile->upload_rapor_kelas_5);
            }
            $profile->upload_rapor_kelas_5 = $request->file('upload_rapor_kelas_5')->store('assets/img/formpsb', 'public');
        }

        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Files updated successfully.');
    }
}
