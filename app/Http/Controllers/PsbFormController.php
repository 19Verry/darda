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

    // Tambahkan tanggal pendaftaran dan email
    $data['tanggal_pendaftaran'] = now()->format('Y-m-d');


    // Simpan file
    $files = [
        'upload_ijazah' => 'assets/img/formpsb',
        'upload_rapor_kelas_5' => 'assets/img/formpsb',
        'foto_3x4' => 'assets/img/formpsb',
        'upload_kk' => 'assets/img/formpsb',
        'upload_akte' => 'assets/img/formpsb'
    ];
    
    foreach ($files as $key => $path) {
        if ($request->hasFile($key)) {
            // Cek apakah ada file lama yang perlu dihapus
            if (isset($data[$key]) && file_exists(public_path($data[$key]))) {
                try {
                    unlink(public_path($data[$key]));
                } catch (\Exception $e) {
                    \Log::error("Gagal menghapus file $key: " . $e->getMessage());
                }
            }
    
            // Simpan file baru
            try {
                $data[$key] = $request->file($key)->store($path, 'public');
            } catch (\Exception $e) {
                \Log::error("Gagal menyimpan file $key: " . $e->getMessage());
            }
        }
    }
    

    // Simpan ke database
    formpsb::create($data);

    return redirect()->route('finishpsb')->with('success', 'Pendaftaran berhasil.');
}

}


