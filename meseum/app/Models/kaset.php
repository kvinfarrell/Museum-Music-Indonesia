<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kaset extends Model
{
    use HasFactory;
    protected $table = 'kaset';
    protected $fillable = [
        'nomor_regist', 'penyumbang', 'tgl_masuk', 'lagu' , 'deskripsi', 'rak'
    ];
}
