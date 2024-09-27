<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HeaderFooter;
use App\Models\formpsb;

class PsbFormController extends Controller
{
    public function index()
    {
        $HeaderFooter = HeaderFooter::first();
        return view('psb/formpsb', [
            'HeaderFooter' => $HeaderFooter,
        ]);
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'nisn' => 'required|numeric',
            'nik' => 'required|numeric',
            'tempat_lahir' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'provinsi' => 'required|string|max:255',
            'kabupaten_kota' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'desa_kelurahan' => 'required|string|max:255',
            'asal_sekolah' => 'required|string|max:255',
            'provinsi_sekolah_asal' => 'required|string|max:255',
            'kabupaten_kota_sekolah_asal' => 'required|string|max:255',
            'kecamatan_sekolah_asal' => 'required|string|max:255',
            'tahun_lulus' => 'required|numeric',
            'upload_ijazah' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'nama_ayah' => 'required|string|max:255',
            'pendidikan_ayah' => 'required|string',
            'pekerjaan_ayah' => 'required|string|max:255',
            'penghasilan_ayah' => 'required|string',
            'no_hp_ayah' => 'required|string',
            'nama_ibu' => 'required|string|max:255',
            'pendidikan_ibu' => 'required|string',
            'pekerjaan_ibu' => 'required|string|max:255',
            'penghasilan_ibu' => 'required|string',
            'no_hp_ibu' => 'required|string',
            'upload_rapor_kelas_5' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'prestasi_lain' => 'nullable|string',
            'jumlah_hafalan' => 'nullable|numeric',
            'prestasi_alquran' => 'nullable|string',
            'prodi_dipilih' => 'required|string|max:255',
            'jenis_prodi' => 'required|string',
            'penandatangan' => 'required|string|max:255',
            'foto_3x4' => 'required|file|mimes:jpeg,png,jpg',
            'upload_kk' => 'required|file|mimes:pdf,jpeg,png,jpg',
            'upload_akte' => 'required|file|mimes:pdf,jpeg,png,jpg',
        ]);

        // Menyimpan data
        $data = $request->except(['upload_ijazah', 'upload_rapor_kelas_5', 'foto_3x4', 'upload_kk', 'upload_akte']);

        // Tambahkan tanggal pendaftaran
        $data['tanggal_pendaftaran'] = now()->format('Y-m-d');

        
        // Simpan file dengan metode move()
        if ($request->hasFile('upload_ijazah')) {
            $imageName = time() . '_ijazah.' . $request->file('upload_ijazah')->extension();
            $request->file('upload_ijazah')->move(public_path('assets/img/formpsb'), $imageName);
            $data['upload_ijazah'] = 'assets/img/formpsb/' . $imageName;
        }

        if ($request->hasFile('upload_rapor_kelas_5')) {
            $imageName = time() . '_rapor_kelas_5.' . $request->file('upload_rapor_kelas_5')->extension();
            $request->file('upload_rapor_kelas_5')->move(public_path('assets/img/formpsb'), $imageName);
            $data['upload_rapor_kelas_5'] = 'assets/img/formpsb/' . $imageName;
        }

        if ($request->hasFile('foto_3x4')) {
            $imageName = time() . '_foto_3x4.' . $request->file('foto_3x4')->extension();
            $request->file('foto_3x4')->move(public_path('assets/img/formpsb'), $imageName);
            $data['foto_3x4'] = 'assets/img/formpsb/' . $imageName;
        }

        if ($request->hasFile('upload_kk')) {
            $imageName = time() . '_upload_kk.' . $request->file('upload_kk')->extension();
            $request->file('upload_kk')->move(public_path('assets/img/formpsb'), $imageName);
            $data['upload_kk'] = 'assets/img/formpsb/' . $imageName;
        }

        if ($request->hasFile('upload_akte')) {
            $imageName = time() . '_upload_akte.' . $request->file('upload_akte')->extension();
            $request->file('upload_akte')->move(public_path('assets/img/formpsb'), $imageName);
            $data['upload_akte'] = 'assets/img/formpsb/' . $imageName;
        }

        // Simpan ke database
        try {
            formpsb::create($data);
            return redirect()->route('finishpsb')->with('success', 'Pendaftaran berhasil.');
        } catch (\Exception $e) {
            return back()->withErrors(['msg' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
}