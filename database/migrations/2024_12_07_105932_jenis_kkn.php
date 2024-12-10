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
        Schema::create('jenis_kkn', function(Blueprint $table){
            $table->bigIncrements('id_kkn');
            $table->unsignedBigInteger('id_semester')->nullable();
            $table->string('Jenis', 50);
            $table->string('Deskripsi', 200);
            $table->string('Provinsi', 50);
            $table->string('Kabupaten', 50);
            $table->string('Kecamatan', 50);
            $table->string('Kelurahan', 50);
            $table->string('Wilayah', 100);
            $table->date('Tanggal_mulai');
            $table->date('Tanggal_selesai');
            $table->timestamps();

            $table->foreign('id_semester')->references('id_semester')->on('semester')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_kkn');
    }
};
