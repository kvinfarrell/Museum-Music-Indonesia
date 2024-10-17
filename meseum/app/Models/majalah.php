<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class majalah extends Model
{
    use HasFactory;

    protected $table = 'majalahs';
    protected $fillable = [
       'issn', 'tgl_masuk', 'judul', 'isi_majalah', 'deskripsi', 'rak'
    ];
    public $timestamps = false;
}
