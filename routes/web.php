<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GuruController;
use App\Http\Controllers\Admin\SiswaController;
use App\Http\Controllers\Admin\JadwalController;
use App\Http\Controllers\Admin\InventarisController;

Route::get('/', function () {
    return view('welcome');

});

Route::middleware('role:admin')->prefix('admin')->group(function () {
    Route::resource('siswa', SiswaController::class)->except(['show','edit','update']);
    Route::resource('guru', GuruController::class)->except(['show','edit','update']);
    Route::resource('inventaris', InventarisController::class)->except(['show','edit','update']);
    Route::resource('jadwal', JadwalController::class)->except(['show','edit','update']);
});
