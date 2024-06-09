<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

App::setLocale('id');

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/patient', [PatientController::class, 'index'])->name('patient');
Route::get('/patient/add', [PatientController::class, 'add'])->name('patient/add');
Route::get('/patient/{id}/edit', [PatientController::class, 'edit'])->name('patient/edit');
Route::post('/patient/insert', [PatientController::class, 'store'])->name('patient/insert');
Route::delete('/patient/{id}', [PatientController::class, 'destroy'])->name('patient/delete');
Route::get('/patients/export', [PatientController::class, 'export'])->name('patient-export');
Route::put('/patients/{id}', [PatientController::class, 'update'])->name('patient/update');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
