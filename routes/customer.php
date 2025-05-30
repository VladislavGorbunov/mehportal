<?php 

use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\RegistrationController;
use App\Http\Controllers\Customer\OrderController;

Route::get('/registration/customer', [RegistrationController::class, 'registrationCustomerPage'])->name('registration-customer');
Route::post('/registration/customer', [RegistrationController::class, 'store']);

Route::get('/login/customer', [AuthController::class, 'loginCustomerPage'])->name('login-customer');

Route::post('/login/customer', [AuthController::class, 'loginCustomer']);

Route::middleware(['customer'])->group(function () {
    Route::get('/customer/add-order', [OrderController::class, 'addOrder'])->name('add-order');

    Route::get('customer/logout', [AuthController::class, 'logout']);
});