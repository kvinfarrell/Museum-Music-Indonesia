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
        Schema::create('majalahs', function (Blueprint $table) {
            $table->id();
            $table->integer('issn')->unique();
            $table->date('tgl_masuk');
            $table->string('judul');
            $table->string('isi_majalah');
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
        Schema::dropIfExists('majalahs');
    }
};
