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
        Schema::create('dosen_pendamping', function (Blueprint $table) {
            $table->bigIncrements('id_pendamping');
            $table->unsignedBigInteger('id_kkn');
            $table->unsignedBigInteger('id_dosen');
            $table->unsignedBigInteger('id_kelompok');

            // Foreign key constraints
            $table->foreign('id_kkn')->references('id_kkn')->on('jenis_kkn')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_dosen')->references('id_dosen')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kelompok')->references('id_kelompok')->on('kelompok_kkn')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen_pendamping');
    }
};
