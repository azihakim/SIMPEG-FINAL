<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\CutiIzinController;
use App\Http\Controllers\GajiController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PenugasanController;
use App\Http\Controllers\PhkController;
use App\Http\Controllers\PromosiController;
use App\Http\Controllers\RecruitmentController;
use App\Http\Controllers\RewardandPunishmentController;
use App\Models\Recruitment;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });




Route::middleware('auth')->group(function () {

    
    Route::get('/', function () {
        return view('dashboard');
    })->middleware('checkRole:pelamar');

    Route::get('/dashboard-karyawan', function () {
        return view('karyawan.dashboard');
    });


    Route::resource('karyawan', KaryawanController::class);
    Route::get('/tambah-karyawan', function () {
        return view('karyawan.tambah');
    });
    Route::put('/karyawan/{id}/status', [KaryawanController::class, 'status'])->name('karyawan.status');

    Route::resource('absensi', AbsensiController::class);
    Route::get('absensi-filter', [AbsensiController::class, 'filter'])->name('absensi.filter');

    Route::resource('phk', PhkController::class);
    Route::get('/tambah-phk', function () {
        return view('phk.tambah');
    });

    Route::resource('cutiizin', CutiIzinController::class);
    Route::get('/tambah-cutiizin', function () {
        return view('cutiizin.tambah');
    });
    Route::put('/cutiizin/{id}/status', [CutiIzinController::class, 'status'])->name('cutiizin.status');

    Route::resource('reward-punishment', RewardandPunishmentController::class);
    Route::get('/tambah-RewardandPunishment', function () {
        return view('RewardandPunishment.tambah');
    });

    Route::resource('penugasan', PenugasanController::class);
    Route::get('/tambah-penugasan', function () {
        return view('penugasan.tambah');
    });

    Route::resource('promosi', PromosiController::class);
    Route::get('/tambah-promosi', function () {
        return view('promosi.tambah');
    });


    Route::put('/cutiizin/{id}/status', [CutiIzinController::class, 'status'])->name('cutiizin.status');
    

    Route::get('/login', function () {
        return view('login');
    });
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});
Route::get('/regist-calonkaryawan', function () {
        return view('recruitment.regist');
    });
// Route::post('/register', [RecruitmentController::class, 'regist'])->name('register.regist');

Route::resource('recruitment', RecruitmentController::class);


require __DIR__.'/auth.php';