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
        Schema::create('instrumentradisionals', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_regist')->unique();
            $table->string('nama_instrumen');
            $table->string('daerah');
            $table->string('penyumbang');
            $table->integer('quantity');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instrumentradisionals');
    }
};
