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
        Schema::create('kelompok_kkn', function(Blueprint $table){
            $table->bigIncrements('id_kelompok');
            $table->unsignedBigInteger('id_kkn')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();
            $table->unsignedBigInteger('id_dosen')->nullable();
            $table->unsignedBigInteger('nim')->nullable();
            $table->string('Nama', 30);
            $table->string('Jenis', 50);
            $table->string('Nama_dosen', 50);
            $table->string('Wilayah', 100);
            $table->string('Provinsi', 50);
            $table->string('Kabupaten', 50);
            $table->string('Kecamatan', 50);
            $table->string('Kelurahan', 50);
            $table->timestamps(); 

            $table->foreign('id_kkn')->references('id_kkn')->on('jenis_kkn')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_dosen')->references('id_dosen')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompok_kkn');
    }
};
