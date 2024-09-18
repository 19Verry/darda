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
        Schema::table('kurikulum_smas', function (Blueprint $table) {
            $table->string('gambar')->nullable()->after('masa_jabatan');
            $table->string('kontak')->after('gambar');
        });
    }
};