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
        Schema::create('kurikulum_smas', function (Blueprint $table) {
            $table->id();
            $table->text('deskripsi');
            $table->string('kepala_kurikulum');
            $table->string('masa_jabatan');
            $table->string('gambar')->nullable();
            $table->string('kontak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kurikulum_smas');
    }
};