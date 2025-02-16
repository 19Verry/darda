<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('home_sejarahs', function (Blueprint $table) {
            $table->id();
            $table->string('judul_deskripsi');
            $table->text('deskripsi');
            $table->string('judul_timeline');
            $table->text('timeline');
            $table->string('gambar')->nullable();
            $table->text('link_video');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_sejarahs');
    }
};