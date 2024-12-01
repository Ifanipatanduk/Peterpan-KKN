<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
        public function up(): void {
            Schema::create('dokumen_kegiatans', function (Blueprint $table) {
                $table->id();
                $table->string('Judul');
                $table->string('Deskripsi');
                $table->string('File');
                $table->String('nama_asli')->nullable();
                $table->timestamps(); 
            });
        }

    public function down(): void
    {
        Schema::dropIfExists('dokumen_kegiatans');
    }
};
