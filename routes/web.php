<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', [PatientController::class, 'viewFormPatient'])->name('patient-form');
Route::post('/', [PatientController::class, 'store'])->name('patient-store');