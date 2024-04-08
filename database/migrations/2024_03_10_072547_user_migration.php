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
        Schema::create('user',function (Blueprint $tbale) {
            $tbale->id();
            $tbale->string('email');
            $tbale->string('nama');
            $tbale->string('lokasi');
            $tbale->string('jenis_permaslahan');
            $tbale->string('deskripsi_permasalahan');
            $tbale->string('bukti_permasalahan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};
