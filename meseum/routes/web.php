<?php


// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cdController;
use App\Http\Controllers\authController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\userController;
use App\Http\Controllers\kasetController;
use App\Http\Controllers\MajalahController;
use App\Http\Controllers\komponenController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\memorabiliaController;
use App\Http\Controllers\piringanhitamController;
use App\Http\Controllers\instrumenmodernController;
use App\Http\Controllers\instrumentradisionalController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Auth
Route::get('login', [authController::class, 'showLoginForm'])->name('login');
Route::post('login', [authController::class, 'login'] );
Route::post('logout', [authController::class, 'logout'])->name('logout');

// Admin
Route::middleware(['auth'])->group(function(){
    Route::get('/change-password', [authController::class, 'changepaswordPage'])->name('change-password-form');
    Route::post('/change-password', [authController::class, 'changePassword'])->name('change-password');

    Route::get('/dashboard', [dashboardController::class, 'showDashboard']);
    Route::get('/buku', function () {
        return view('buku');
    });
    Route::get('/majalah', function () {
        return view('majalah');
    });
    Route::get('/piringanhitam', function () {
        return view('piringanhitam');
    });
    Route::get('/instrumenmodern', function () {
        return view('instrumenmodern');
    });
    Route::get('/instrumentradisional', function () {
        return view('instrumentradisional');
    });

    Route::get('/cd', function () {
        return view('cd');
    });

    Route::get('/komponen', function () {
        return view('komponen');
    });
    Route::get('/kaset', function () {
        return view('kaset');
    });
    Route::get('/memorabilia', function () {
        return view('memorabilia');
    });

    /// CRUD
    // Majalah
    Route::get('/majalah', [MajalahController::class, 'index'])->name('majalah.index');
    Route::get('/majalah/create', [MajalahController::class, 'create'])->name('majalah.create');
    Route::post('/majalah/create', [MajalahController::class, 'store'])->name('majalah.store');
    Route::get('/majalah/edit/{id}', [MajalahController::class, 'edit'])->name('majalah.edit');
    Route::put('/majalah/edit/{id}', [MajalahController::class, 'update'])->name('majalah.update');
    Route::delete('/majalah/{id}', [MajalahController::class, 'destroy'])->name('majalah.destroy');
    Route::get('/majalah', [MajalahController::class, 'index'])->name('majalah.index');

    //buku
    Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
    Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
    Route::post('/buku/create', [BukuController::class, 'store'])->name('buku.store');
    Route::get('/buku/edit/{id}', [BukuController::class, 'edit'])->name('buku.edit');
    Route::put('/buku/edit/{id}', [BukuController::class, 'update'])->name('buku.update');
    Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');

    //piringanhitam
    Route::get('/piringanhitam', [piringanhitamController::class, 'index'])->name('piringanhitam.index');
    Route::get('/piringanhitam/create', [piringanhitamController::class, 'create'])->name('piringanhitam.create');
    Route::post('/piringanhitam', [piringanhitamController::class, 'store'])->name('piringanhitam.store');
    Route::get('/piringanhitam/edit/{id}', [piringanhitamController::class, 'edit'])->name('piringanhitam.edit');
    Route::put('/piringanhitam/edit/{id}', [piringanhitamController::class, 'update'])->name('piringanhitam.update');
    Route::delete('/piringanhitam/{id}', [piringanhitamController::class, 'destroy'])->name('piringanhitam.destroy');

    //instrumenmodern
    Route::get('/instrumenmodern', [instrumenmodernController::class, 'index'])->name('instrumenmodern.index');
    Route::get('/instrumenmodern/create', [instrumenmodernController::class, 'create'])->name('instrumenmodern.create');
    Route::post('/instrumenmodern', [instrumenmodernController::class, 'store'])->name('instrumenmodern.store');
    Route::get('/instrumenmodern/edit/{id}', [instrumenmodernController::class, 'edit'])->name('instrumenmodern.edit');
    Route::put('/instrumenmodern/edit/{id}', [instrumenmodernController::class, 'update'])->name('instrumenmodern.update');
    Route::delete('/instrumenmodern/{id}', [instrumenmodernController::class, 'destroy'])->name('instrumenmodern.destroy');

    //instrumentradisional
    Route::get('/instrumentradisional', [instrumentradisionalController::class, 'index'])->name('instrumentradisional.index');
    Route::get('/instrumentradisional/create', [instrumentradisionalController::class, 'create'])->name('instrumentradisional.create');
    Route::post('/instrumentradisional', [instrumentradisionalController::class, 'store'])->name('instrumentradisional.store');
    Route::get('/instrumentradisional/edit/{id}', [instrumentradisionalController::class, 'edit'])->name('instrumentradisional.edit');
    Route::put('/instrumentradisional/edit/{id}', [instrumentradisionalController::class, 'update'])->name('instrumentradisional.update');
    Route::delete('/instrumentradisional/{id}', [instrumentradisionalController::class, 'destroy'])->name('instrumentradisional.destroy');

    //cd
    Route::get('/cd', [cdController::class, 'index'])->name('cd.index');
    Route::get('/cd/create', [cdController::class, 'create'])->name('cd.create');
    Route::post('/cd/create', [cdController::class, 'store'])->name('cd.store');
    Route::get('/cd/edit/{id}', [cdController::class, 'edit'])->name('cd.edit');
    Route::put('/cd/edit/{id}', [cdController::class, 'update'])->name('cd.update');
    Route::delete('/cd/{id}', [cdController::class, 'destroy'])->name('cd.destroy');
    Route::get('/cd', [cdController::class, 'index'])->name('cd.index');


    //komponen
    Route::get('/komponen', [komponenController::class, 'index'])->name('komponen.index');
    Route::get('/komponen/create', [komponenController::class, 'create'])->name('komponen.create');
    Route::post('/komponen/create', [komponenController::class, 'store'])->name('komponen.store');
    Route::get('/komponen/edit/{id}', [komponenController::class, 'edit'])->name('komponen.edit');
    Route::put('/komponen/edit/{id}', [komponenController::class, 'update'])->name('komponen.update');
    Route::delete('/komponen/{id}', [komponenController::class, 'destroy'])->name('komponen.destroy');

    //kaset
    Route::get('/kaset', [kasetController::class, 'index'])->name('kaset.index');
    Route::get('/kaset/create', [kasetController::class, 'create'])->name('kaset.create');
    Route::post('/kaset/create', [kasetController::class, 'store'])->name('kaset.store');
    Route::get('/kaset/edit/{id}', [kasetController::class, 'edit'])->name('kaset.edit');
    Route::put('/kaset/edit/{id}', [kasetController::class, 'update'])->name('kaset.update');
    Route::delete('/kaset/{id}', [kasetController::class, 'destroy'])->name('kaset.destroy');

    //memorabilia
    Route::get('/memorabilia', [memorabiliaController::class, 'index'])->name('memorabilia.index');
    Route::get('/memorabilia/create', [memorabiliaController::class, 'create'])->name('memorabilia.create');
    Route::post('/memorabilia/create', [memorabiliaController::class, 'store'])->name('memorabilia.store');
    Route::get('/memorabilia/edit/{id}', [memorabiliaController::class, 'edit'])->name('memorabilia.edit');
    Route::put('/memorabilia/edit/{id}', [memorabiliaController::class, 'update'])->name('memorabilia.update');
    Route::delete('/memorabilia/{id}', [memorabiliaController::class, 'destroy'])->name('memorabilia.destroy');

});




// USER
Route::get('/home', function () {
    return view('UserPage.Museum.home');
});
Route::get('/PageMusik', function () {
    return view('UserPage.Musik.PageMusik');
});
Route::get('/PageKaset', function () {
    return view('UserPage.Musik.Kaset.pagekasetindonesia');
});
Route::get('/PageCD', function () {
    return view('UserPage.Musik.CD.pageCDIndonesia');
});
Route::get('/PagePiringanhitam', function () {
    return view('UserPage.Musik.PiringanHitam.pagepiringanhitamindonesia');
});



Route::get('/user/kaset', [userController::class,'kaset']);
Route::get('/user/cd', [userController::class,'cd'])->name('user.cd');
Route::get('/user/piringanhitam', [userController::class,'piringanhitam'])->name('user.piringanhitam');
Route::get('/user/memorabilia', [userController::class,'memorabilia'])->name('user.memorabilia');

// Alamat Musik
Route::get('/alatmusik/home',function () {
    return view('UserPage.alat_musik.alat_musik');
});

Route::get('/alatmusik/modern',[userController::class,'alatmusik_modern']);
Route::get('/alatmusik/tradisional',[userController::class,'alatmusik_tradisional']);

//artikel
Route::get('/user/artikel',function () {
    return view('UserPage.Artikel.artikel');
});

Route::get('/artikel/buku',[userController::class,'buku']);

Route::get('/artikel/majalah',[userController::class,'majalah']);
