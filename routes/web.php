<?php

use App\Http\Controllers\PendaftarController;
use Illuminate\Support\Facades\Route;

Route::get('/pendaftaran', [PendaftarController::class, 'index'])->name('pendaftaran');
Route::get('/form-pendaftaran', [PendaftarController::class, 'formPendaftaran'])->name('form-pendaftaran');
Route::get('/pendaftaran-berhasil', [PendaftarController::class, 'pendaftaranBerhasil'])->name('pendaftaran-berhasil');
Route::get('/pendaftaran-gagal', [PendaftarController::class, 'pendaftaranGagal'])->name('pendaftaran-gagal');
