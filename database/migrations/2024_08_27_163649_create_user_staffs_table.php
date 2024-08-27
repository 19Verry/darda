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
        Schema::create('user_staffs', function (Blueprint $table) {
            $table->id();
            $table->string('username', 50)->unique();
            $table->string('email', 100)->unique();
            $table->boolean('edit_prodi')->default(false);
            $table->boolean('edit_program')->default(false);
            $table->boolean('edit_kurikulum')->default(false);
            $table->boolean('edit_tahfidz')->default(false);
            $table->boolean('edit_kesantrian')->default(false);
            $table->boolean('edit_akhlak')->default(false);
            $table->boolean('edit_bahasa')->default(false);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_staffs');
    }
};