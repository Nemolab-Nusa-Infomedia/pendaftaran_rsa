<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PendaftarController;
use Illuminate\Support\Facades\Route;


// ========== Auth ==========
Route::get('/', [AuthController::class, 'login'])->name('login');



// ========== Dashboard ==========

// Pendaftaran
Route::get('/pendaftaran', [PendaftarController::class, 'index'])->name('pendaftaran');
Route::get('/form-pendaftaran', [PendaftarController::class, 'formPendaftaran'])->name('form-pendaftaran');
Route::get('/pendaftaran-berhasil', [PendaftarController::class, 'pendaftaranBerhasil'])->name('pendaftaran-berhasil');
Route::get('/pendaftaran-gagal', [PendaftarController::class, 'pendaftaranGagal'])->name('pendaftaran-gagal');
Route::get('/detail-pendaftar', [PendaftarController::class, 'detail'])->name('detail-pendaftar');

// Notification
Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
