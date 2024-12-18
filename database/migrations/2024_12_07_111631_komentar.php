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
        Schema::create('komentar', function(Blueprint $table){
            $table->bigIncrements('id_komen');
            $table->unsignedBigInteger('id_postingan');
            $table->unsignedBigInteger('nim');
            $table->string('Komentar', 200);
            $table->date('Tanggal');
            $table->timestamps();
            $table->foreign('id_postingan')->references('id_postingan')->on('postingan')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('komentar');
    }
};
