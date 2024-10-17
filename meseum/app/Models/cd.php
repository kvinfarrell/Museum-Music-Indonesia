<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cd extends Model
{
    use HasFactory;
    // protected $table = 'cd';
    protected $fillable = [
        'nomor_regist', 'penyumbang', 'tgl_masuk', 'judul', 'lagu' , 'deskripsi', 'rak'
    ];
}
