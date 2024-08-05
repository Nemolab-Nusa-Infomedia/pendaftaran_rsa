<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PatientController;


// ========== Auth ==========
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'check'])->name('check');

// Pendaftaran
Route::get('/', [PatientController::class, 'formPendaftaran'])->name('form-pendaftaran');
Route::post('/store', [PatientController::class, 'store'])->name('store-pendaftaran');
Route::get('/pendaftaran-berhasil', [PatientController::class, 'pendaftaranBerhasil'])->name('pendaftaran-berhasil');
Route::get('/pendaftaran-gagal', [PatientController::class, 'pendaftaranGagal'])->name('pendaftaran-gagal');

// ========== Dashboard ==========
Route::get('/pendaftaran', [AdminController::class, 'index'])->name('pendaftaran');
Route::get('/detail-pendaftar', [AdminController::class, 'detail'])->name('detail-pendaftar');

// Notification
Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
