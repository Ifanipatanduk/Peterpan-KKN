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
        Schema::create('logbook_kegiatans', function (Blueprint $table) {
            $table->id();
            $table->string('Tanggal_kegiatan');
            $table->string('Waktu_mulai');
            $table->string('Waktu_selesai');
            $table->string('Deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('logbook_kegiatans');
    }
};
