<?php 

use App\Http\Controllers\Seller\AuthController;
use App\Http\Controllers\Seller\RegistrationController;
use App\Http\Controllers\Seller\SellerController;

Route::get('/login/seller', [AuthController::class, 'loginPage'])->name('login-seller');
Route::post('/login/seller', [AuthController::class, 'loginSeller']);
Route::get('/registration/seller', [RegistrationController::class, 'registrationPage'])->name('registration-seller');
Route::post('/registration/seller', [RegistrationController::class, 'store']);

Route::middleware(['seller'])->group(function () {
    Route::get('/seller', [SellerController::class, 'index'])->name('seller-index');
    Route::get('/seller/logout', [AuthController::class, 'logout'])->name('seller-logout');


});