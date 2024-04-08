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
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
            $table->string('tanggal')->nullable();
            $table->string('nama_petugas')->nullable();
            $table->string('nomor_etiket')->nullable();
            $table->string('diagnosa')->nullable();
            $table->string('kategori_permasalahan')->nullable();
            $table->string('solusi')->nullable();
            $table->string('lanjutan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
