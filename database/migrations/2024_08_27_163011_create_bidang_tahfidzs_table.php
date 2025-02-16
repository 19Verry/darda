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
        Schema::create('bidang_tahfidzs', function (Blueprint $table) {
            $table->id();
            $table->string('gambar')->nullable();
            $table->text('deskripsi');
            $table->string('kepala_tahfidz');
            $table->string('masa_jabatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bidang_tahfidzs');
}
};
