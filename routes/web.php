<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

App::setLocale('id');

Route::get('/', function () {
    // return view('welcome');
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/patient', [PatientController::class, 'index'])->name('patient');
    Route::get('/patient/add', [PatientController::class, 'add'])->name('patient/add');
    Route::get('/patient/{id}/edit', [PatientController::class, 'edit'])->name('patient/edit');
    Route::post('/patient/insert', [PatientController::class, 'store'])->name('patient/insert');
    Route::delete('/patient/{id}', [PatientController::class, 'destroy'])->name('patient/delete');
    Route::get('/patient/export', [PatientController::class, 'export'])->name('patient-export');
    Route::put('/patient/{id}', [PatientController::class, 'update'])->name('patient/update');

    Route::get('/registration', [RegistrationController::class, 'index'])->name('registration');
    Route::get('/registration/add', [RegistrationController::class, 'add'])->name('registration/add');
    Route::get('/registration/{id}/edit', [RegistrationController::class, 'edit'])->name('registration/edit');
    Route::put('/registration/{id}/cancel', [RegistrationController::class, 'cancel'])->name('registration/cancel');
    Route::put('/registration/{id}/pay', [RegistrationController::class, 'pay'])->name('registration/pay');
    Route::post('/registration/insert', [RegistrationController::class, 'store'])->name('registration/insert');
    Route::get('/registration/export', [RegistrationController::class, 'export'])->name('registration-export');
    Route::put('/registration/{id}', [RegistrationController::class, 'update'])->name('registration/update');

});

require __DIR__.'/auth.php';
