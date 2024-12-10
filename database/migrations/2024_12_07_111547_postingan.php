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
        Schema::create('postingan', function(Blueprint $table){
            $table->bigIncrements('id_postingan');
            $table->unsignedBigInteger('nim');
            $table->unsignedBigInteger('id_admin');
            $table->unsignedBigInteger('id_dosen');
            $table->string('Deskripsi', 200);
            $table->string('Foto',50);
            $table->string('Komentar', 200);
            $table->date('Tanggal_posting');
            $table->timestamps();

            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_dosen')->references('id_dosen')->on('dosen')->onDelete('cascade')->onUpdate('cascade');
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postingan');
    }
};
