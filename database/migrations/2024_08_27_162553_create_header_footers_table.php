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
        Schema::create('header_footers', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mahad');
            $table->string('warna_slidshow');
            $table->string('warna_heading');
            $table->string('warna_judul');
            $table->string('warna_paragraph');
            $table->string('nama_jalan');
            $table->string('kelurahan_kecamatan_kota');
            $table->string('no_hp');
            $table->string('link_facebook');
            $table->string('link_instagram');
            $table->string('link_youtube');
            $table->string('link_maps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header_footers');
    }
};