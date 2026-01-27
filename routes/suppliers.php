<?php 

use App\Http\Controllers\Suppliers\AuthController;
use App\Http\Controllers\Suppliers\RegistrationController;
use App\Http\Controllers\Suppliers\SuppliersController;

Route::get('/login/supplier', [AuthController::class, 'loginPage'])->name('login-supplier');
Route::post('/login/supplier', [AuthController::class, 'loginSeller']);
Route::get('/registration/suppliers', [RegistrationController::class, 'registrationPage'])->name('registration-suppliers');
Route::post('/registration/suppliers', [RegistrationController::class, 'store']);

Route::middleware(['suppliers'])->group(function () {
    Route::get('/supplier', [SuppliersController::class, 'index'])->name('supplier-index');
    Route::get('/supplier/logout', [AuthController::class, 'logout'])->name('supplier-logout');


});