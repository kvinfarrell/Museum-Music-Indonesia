<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    use HasFactory;
    protected $table = 'bukus';
    protected $fillable = [
        'isbn', 'tgl_masuk', 'judul', 'isi_buku', 'deskripsi', 'rak'
    ];
}
