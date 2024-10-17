<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class komponen extends Model
{
    use HasFactory;

    // protected $table = 'instrumenmoderns';
    protected $fillable = [
       'nama_komponen', 'dekripsi', 'kuantitas', 'rak'
    ];
    public $timestamps = false;
}

