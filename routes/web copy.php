<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\TransaksiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.main');
});
Route::resource('stok', StokController::class);
Route::resource('anggota', AnggotaController::class);
Route::resource('pasien', PasienController::class);
Route::resource('transaksi', TransaksiController::class);
