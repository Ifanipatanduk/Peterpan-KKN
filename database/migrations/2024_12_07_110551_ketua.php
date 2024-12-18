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
        Schema::create('ketua', function(Blueprint $table){
            $table->bigIncrements('id_ketua');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('id_kelompok')->nullable();
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
        Schema::dropIfExists('ketua');
    }
};
