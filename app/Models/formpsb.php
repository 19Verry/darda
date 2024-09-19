<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formpsb extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'tanggal_pendaftaran',
        'nama_lengkap',
        'nik',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'provinsi',
        'kabupaten_kota',
        'kecamatan',
        'desa_kelurahan',
        'asal_sekolah',
        'provinsi_sekolah_asal',
        'kabupaten_kota_sekolah_asal',
        'kecamatan_sekolah_asal',
        'tahun_lulus',
        'upload_ijazah',
        'nama_ayah',
        'pendidikan_ayah',
        'pekerjaan_ayah',
        'penghasilan_ayah',
        'no_hp_ayah',
        'nama_ibu',
        'pendidikan_ibu',
        'pekerjaan_ibu',
        'penghasilan_ibu',
        'no_hp_ibu',
        'upload_rapor_kelas_5',
        'rangking_kls_5',
        'prestasi_lain',
        'jumlah_hafalan',
        'prestasi_alquran',
        'prodi_dipilih',
        'penandatangan',
        'foto_3x4',
        'upload_kk',
        'upload_akte',
        'email',
    ];

}
