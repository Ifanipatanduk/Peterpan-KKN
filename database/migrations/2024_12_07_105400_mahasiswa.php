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
        Schema::create('mahasiswa', function(Blueprint $table){
            $table->bigIncrements('nim');  
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('id_kelompok')->nullable();
            $table->string('Nama', 30);  
            $table->string('Jenis_kelamin', 10);
            $table->string('Kontak', 15);  
            $table->string('Email', 30);   
            $table->string('Prodi', 30);   
            $table->string('Fakultas', 30);  
            $table->timestamps();  

            $table->foreign('user_id')->references('user_id')->on('hak_akses')->onDelete('cascade')->onUpdate('cascade'); 
            $table->foreign('id_kelompok')->references('id_kelompok')->on('kelompok_kkn')->onDelete('cascade')->onUpdate('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswa');
    }
};
