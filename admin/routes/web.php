<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/patient', [PatientController::class, 'index'])->name('patient');
Route::get('/patients/export', [PatientController::class, 'export'])->name('patient-export');;
Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
