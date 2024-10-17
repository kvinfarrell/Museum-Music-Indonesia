<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class memorabilia extends Model
{
    use HasFactory;
    protected $table = 'memorabilias';
    protected $fillable = [
        'nomor_regist', 'penyumbang', 'tgl_masuk', 'Biografi', 'foto', 'nama', 'deskripsi'
    ];
}
