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
        Schema::create('laporan_kegiatan', function(Blueprint $table){
            $table->bigIncrements('id_laporan');
            $table->unsignedBigInteger('id_pendamping')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('id_kelompok')->nullable();
            $table->string('Judul', 30);
            $table->string('Deskripsi', 200);
            $table->string('File', 50);
            $table->string('Nama_asli', 50);
            $table->timestamps(); 

            $table->foreign('id_pendamping')->references('id_pendamping')->on('dosen_pendamping')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_kelompok')->references('id_kelompok')->on('kelompok_kkn')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_kegiatan');
    }
};
