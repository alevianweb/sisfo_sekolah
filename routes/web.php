<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PpdbController;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Guru\JadwalController as JadwalGuru;
use App\Http\Controllers\Admin\InventarisController;
use App\Http\Controllers\Admin\PpdbController as AdminPpdb;
use App\Http\Controllers\Guru\NilaiController as GuruNilai;
use App\Http\Controllers\Admin\NilaiController as AdminNilai;
use App\Http\Controllers\Siswa\NilaiController as SiswaNilai;
use App\Http\Controllers\Admin\AbsensiController as AdminAbsensi;
use App\Http\Controllers\Siswa\AbsensiController as SiswaAbsensi;



Route::get('/', function () {
    return view('guest.home');

});

Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('auth.login');
    })->name('login');

    Route::post('/login', [AuthController::class, 'login']);
});

Route::middleware(['auth', 'role:admin'])->prefix('admin')
    ->group(function () {
        Route::resource('siswa', SiswaController::class)->except(['show']);
        Route::get('/', fn() => view('admin.dashboard'));
        Route::resource('guru', GuruController::class)->except(['show', 'edit', 'update']);
        Route::resource('inventaris', InventarisController::class)->except(['show', 'edit', 'update']);
        Route::resource('jadwal', JadwalController::class)->except(['show', 'edit', 'update']);
        Route::get('/absen', [AdminAbsensi::class, 'index']);
        Route::get('/nilai', [AdminNilai::class, 'index']);
        Route::get('/ppdb', [AdminPpdb::class, 'index']);
        Route::get('/ppdb/{id}/{status}', [AdminPpdb::class, 'updateStatus']);
    });
Route::middleware(['auth', 'role:siswa'])->prefix('siswa')->group(function () {
    Route::get('/', fn() => view('siswa.dashboard'));
    Route::get('/absen', [SiswaAbsensi::class, 'index']);
    Route::post('/absen', [SiswaAbsensi::class, 'store']);
    Route::get('/riwayat-absen', [SiswaAbsensi::class, 'riwayat']);
    Route::get('/nilai', [SiswaNilai::class, 'index']);
});
Route::middleware(['auth', 'role:guru'])->prefix('guru')->group(function () {
    Route::get('/', fn() => view('guru.dashboard'));
    Route::get('/jadwal', [JadwalGuru::class, 'index']);
    Route::get('/nilai', [GuruNilai::class, 'index']);
    Route::post('/nilai', [GuruNilai::class, 'store']);
    Route::get('/nilai/{id}/edit', [GuruNilai::class, 'edit']);
    Route::put('/nilai/{id}', [GuruNilai::class, 'update']);
});

// Dashboard redirect

// Pengunjung
Route::get('/ppdb', [PpdbController::class, 'create']);
Route::post('/ppdb', [PpdbController::class, 'store']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

