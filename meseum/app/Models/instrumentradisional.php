<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instrumentradisional extends Model
{
    use HasFactory;

    // protected $table = 'instrumentradisionals';
    protected $fillable = [
       'nomor_regist', 'nama_instrumen', 'daerah', 'penyumbang', 'quantity'
    ];
    public $timestamps = false;
}
