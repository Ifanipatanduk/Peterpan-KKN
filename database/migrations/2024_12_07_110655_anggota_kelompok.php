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
        Schema::create('anggota_kelompok', function(Blueprint $table){
            $table->bigIncrements('id_anggota');
            $table->unsignedBigInteger('id_kelompok');
            $table->unsignedBigInteger('nim');

            $table->foreign('id_kelompok')->references('id_kelompok')->on('kelompok_kkn')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nim')->references('nim')->on('ketua')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota_kelompok');
    }
};
