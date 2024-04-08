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
        Schema::create('form_tiketing', function (Blueprint $table) {
            $table->id();
            $table->string('email')->nullable();
            $table->string('nama')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('jenis_permasalahan')->nullable();
            $table->string('deskripsi_permasalahan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_tiketing');
    }
};
