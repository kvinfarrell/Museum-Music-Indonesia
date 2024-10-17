<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class piringanhitam extends Model
{
    use HasFactory;

    protected $table = 'piringanhitams';
    protected $fillable = [
       'nomor_regist', 'penyumbang', 'tgl_masuk', 'cover', 'lagu','deskripsi', 'rak'
    ];
    public $timestamps = false;
}
