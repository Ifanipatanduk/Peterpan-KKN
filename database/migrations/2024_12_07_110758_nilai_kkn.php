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
        Schema::create('nilai_kkn', function(Blueprint $table){
            $table->bigIncrements('id_nilai');
            $table->unsignedBigInteger('id_pendamping')->nullable();
            $table->unsignedBigInteger('nim')->nullable();
            $table->integer('Nilai');
            $table->timestamps();

            $table->foreign('id_pendamping')->references('id_pendamping')->on('dosen_pendamping')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('nim')->references('nim')->on('mahasiswa')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nilai_kkn');
    }
};
