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
        Schema::create('home_tentangs', function (Blueprint $table) {
            $table->id();
            $table->String('tumbnail');
            $table->String('link_vidio');
            $table->text('visi_mahad');
            $table->text('misi_mahad');
            $table->string('jumlah_santri');
            $table->string('jumlah_ustad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_tentangs');
    }
};
