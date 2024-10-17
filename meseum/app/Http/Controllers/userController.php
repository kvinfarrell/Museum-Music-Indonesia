<?php

namespace App\Http\Controllers;

use App\Models\cd;
use App\Models\buku;
use App\Models\kaset;
use App\Models\majalah;
use App\Models\memorabilia;
// use Illuminate\Http\Request;
use App\Models\piringanhitam;
use App\Models\instrumenmodern;
use App\Models\instrumentradisional;

class userController extends Controller
{
    public function kaset(){
        $kaset = kaset::all();

        return view("UserPage.Musik.Kaset.pagekasetindonesia",compact("kaset"));
    }
    public function cd(){
        $cd = cd::all();
        // D:\XAMPP\htdocs\meseum\resources\views\UserPage\Musik\CD\CDIndonesia.blade.php
        return view("UserPage.Musik.CD.CDIndonesia",compact("cd"));
    }
    public function piringanhitam(){
        $piringanhitam = piringanhitam::all();
        // D:\XAMPP\htdocs\meseum\resources\views\UserPage\Musik\CD\CDIndonesia.blade.php
        return view("UserPage.Musik.PiringanHitam.piringanhitamindonesia",compact("piringanhitam"));
    }
    public function memorabilia(){
        $memorabilia = memorabilia::all();
        return view("UserPage.Memorabilia.foto",compact("memorabilia"));
    }

    public function alatmusik_modern(){
        $alatmusik_modern = instrumenmodern::all();
        return view('UserPage.alat_musik.alat_musik_modern', compact("alatmusik_modern"));
    }

    public function alatmusik_tradisional(){
        $alatmusik_tradisional = instrumentradisional::all();
        return view('UserPage.alat_musik.alat_musik_tradisional', compact("alatmusik_tradisional"));
    }
    
    public function buku(){
        $buku = buku::all();
        return view('UserPage.Artikel.buku', compact("buku"));
    }
    public function majalah(){
        $majalah = majalah::all();
        return view('UserPage.Artikel.majalah', compact("majalah"));
    }
}