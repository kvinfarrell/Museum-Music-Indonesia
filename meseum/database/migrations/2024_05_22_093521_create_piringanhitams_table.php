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
        Schema::create('piringanhitams', function (Blueprint $table) {
            $table->id();
            $table->integer('nomor_regist')->unique();
            $table->string('penyumbang');
            $table->date('tgl_masuk');
            $table->string('cover');
            $table->string('lagu');
            $table->string('deskripsi');
            $table->integer('rak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('piringanhitams');
    }
};
