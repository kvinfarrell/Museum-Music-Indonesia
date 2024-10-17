<?php

namespace App\Http\Controllers;

use App\Models\cd;
use Carbon\Carbon;
use App\Models\buku;
use App\Models\kaset;
use App\Models\majalah;
use App\Models\komponen;
use App\Models\memorabilia;
use Illuminate\Http\Request;
use App\Models\piringanhitam;
use App\Models\instrumenmodern;
use App\Models\instrumentradisional;

class dashboardController extends Controller
{

    public function showDashboard(){
        // $today = Carbon::today();

        $kaset = kaset::count();
        $cd =  cd::count();
        $piringanHitam = piringanhitam::count();
        $alatMusikmodern = instrumenmodern::count();
        $alatMusiktradisional = instrumentradisional::count();
        $buku = buku::count();
        $majalah = majalah::count();
        $memorabilia = memorabilia::count();
        $komponen = komponen::count();

        return view('index', [
            'kaset' => $kaset,
            'cd'=> $cd,
            'piringanHitam' =>$piringanHitam ,
            'alatMusikmodern' => $alatMusikmodern ,
            'alatMusiktradisional' => $alatMusiktradisional ,
            'buku' => $buku,
            'majalah' => $majalah,
            'memorabilia' => $memorabilia,
            'komponen' => $komponen,
        ]);
    }
}
