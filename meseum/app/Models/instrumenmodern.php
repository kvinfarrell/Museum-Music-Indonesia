<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instrumenmodern extends Model
{
    use HasFactory;

    // protected $table = 'instrumenmoderns';
    protected $fillable = [
       'nomor_regist', 'nama_instrumen', 'penyumbang', 'quantity'
    ];
    public $timestamps = false;
}

