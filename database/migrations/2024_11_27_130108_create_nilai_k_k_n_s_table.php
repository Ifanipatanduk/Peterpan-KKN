<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilaikkns', function (Blueprint $table) {
            $table->id();
            $table->integer('nilai');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilaikkns');
    }
};
