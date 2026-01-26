<?php 

use App\Http\Controllers\Suppliers\AuthController;
use App\Http\Controllers\Suppliers\RegistrationController;
use App\Http\Controllers\Suppliers\SuppliersController;

Route::get('/login/suppliers', [AuthController::class, 'loginPage'])->name('login-suppliers');
Route::post('/login/suppliers', [AuthController::class, 'loginSeller']);
Route::get('/registration/suppliers', [RegistrationController::class, 'registrationPage'])->name('registration-suppliers');
Route::post('/registration/suppliers', [RegistrationController::class, 'save']);

Route::middleware(['suppliers'])->group(function () {
    Route::get('/suppliers', [SuppliersController::class, 'index'])->name('seller-index');
    Route::get('/suppliers/logout', [AuthController::class, 'logout'])->name('seller-logout');


});