<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('formpsbs', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('status')->default('Diproses');
            $table->date('tanggal_pendaftaran');
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('nisn');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kabupaten_kota');
            $table->string('kecamatan');
            $table->string('desa_kelurahan');
            $table->string('asal_sekolah');
            $table->string('provinsi_sekolah_asal');
            $table->string('kabupaten_kota_sekolah_asal');
            $table->string('kecamatan_sekolah_asal');
            $table->integer('tahun_lulus');
            $table->text('upload_ijazah')->nullable();
            $table->string('nama_ayah');
            $table->string('pendidikan_ayah');
            $table->string('pekerjaan_ayah');
            $table->string('penghasilan_ayah');
            $table->string('no_hp_ayah');
            $table->string('nama_ibu');
            $table->string('pendidikan_ibu');
            $table->string('pekerjaan_ibu');
            $table->string('penghasilan_ibu');
            $table->string('no_hp_ibu');
            $table->text('upload_rapor_kelas_5')->nullable();
            $table->text('prestasi_lain')->nullable();
            $table->integer('jumlah_hafalan');
            $table->text('prestasi_alquran')->nullable();
            $table->string('prodi_dipilih');
            $table->string('penandatangan');
            $table->text('foto_3x4')->nullable();
            $table->text('upload_kk')->nullable();
            $table->text('upload_akte')->nullable();
            $table->string('tahap1')->default('Diproses');
            $table->string('tahap2')->default('Diproses');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('formpsbs');
    }
};
