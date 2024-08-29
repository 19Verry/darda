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
        Schema::create('prodi_takhassushes', function (Blueprint $table) {
            $table->id();
            $table->string('kop');
            $table->text('deskripsi');
            $table->string('pendaftaran');
            $table->string('uang_pangkal');
            $table->string('uang_pakaian');
            $table->string('uang_bulanan');
            $table->string('uang_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prodi_takhassushes');
    }
};