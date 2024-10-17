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
        Schema::create('kaset', function (Blueprint $table) {
            $table->id();
            $table->string('nomor_regist')->unique();
            $table->string('penyumbang');
            $table->date('tgl_masuk');
            $table->string('lagu');
            $table->string('deskripsi');
            $table->string('rak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
