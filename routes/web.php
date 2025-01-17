<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\FormDonasiController;
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

// Donasi
Route::get('/donasi', [FormDonasiController::class, 'index'])->name('donasi');
Route::post('/donasi-send', [FormDonasiController::class, 'donate'])->name('send-donate');

Route::get('/tesview', function () {
    return view('menu.pendaftar.detail-pdf-pendaftar');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // ========== Dashboard ==========
    Route::get('/pendaftaran', [AdminController::class, 'index'])->name('pendaftaran');
    Route::get('/detail-pendaftar/{patient}', [AdminController::class, 'detail'])->name('detail-pendaftar');
    Route::get('/hapus-pendaftar/{patient}', [AdminController::class, 'destroy'])->name('hapus-pendaftar');
    Route::get('/tolak-pendaftar/{patient}', [AdminController::class, 'destroyFromNotif'])->name('tolak-pendaftar');
    Route::get('/export-excel', [PatientController::class, 'exportExcel'])->name('export-excel');
    Route::get('/export-pdf', [PatientController::class, 'exportPdf'])->name('export-pdf');
    Route::get('/export-excel-donation', [DonasiController::class, 'exportExcel'])->name('export-excel-donation');
    Route::get('/export-pdf-donation', [DonasiController::class, 'exportPdf'])->name('export-pdf-donation');

    // Donasi
    Route::get('/data-donasi', [DonasiController::class, 'index'])->name('data-donasi');

    // Notification
    Route::get('/notification', [NotificationController::class, 'index'])->name('notification');
});
