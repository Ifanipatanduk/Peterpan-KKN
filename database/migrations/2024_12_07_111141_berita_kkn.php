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
        Schema::create('berita_kkn', function(Blueprint $table){
            $table->bigIncrements('id_berita');
            $table->unsignedBigInteger('id_admin');
            $table->string('Judul', 200);
            $table->string('Deskripsi', 200);
            $table->string('Foto', 50);
            $table->date('Tanggal');
            $table->timestamps();

            $table->foreign('id_admin')->references('id_admin')->on('admin')->onDelete('cascade')->onUpdate('cascade');
        });
            
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_kkn');
    }

};
