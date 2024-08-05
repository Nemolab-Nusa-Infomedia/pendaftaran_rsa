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
Route::post('/notification/{patient}', [PatientController::class, 'acceptPatient'])->name('accept-patient-pendaftaran');
Route::get('/pendaftaran-berhasil', [PatientController::class, 'pendaftaranBerhasil'])->name('pendaftaran-berhasil');
Route::get('/pendaftaran-gagal', [PatientController::class, 'pendaftaranGagal'])->name('pendaftaran-gagal');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // ========== Dashboard ==========
    Route::get('/pendaftaran', [AdminController::class, 'index'])->name('pendaftaran');
    Route::get('/detail-pendaftar/{patient}', [AdminController::class, 'detail'])->name('detail-pendaftar');
    Route::get('/hapus-pendaftar/{patient}', [AdminController::class, 'destroy'])->name('hapus-pendaftar');

    // Notification
    Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
});
