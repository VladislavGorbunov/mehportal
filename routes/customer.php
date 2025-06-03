<?php 

use App\Http\Controllers\Customer\IndexController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\RegistrationController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\CompanyController;

Route::get('/registration/customer', [RegistrationController::class, 'registrationCustomerPage'])->name('registration-customer');
Route::post('/registration/customer', [RegistrationController::class, 'store']);

Route::get('/login/customer', [AuthController::class, 'loginCustomerPage'])->name('login-customer');

Route::post('/login/customer', [AuthController::class, 'loginCustomer']);

Route::middleware(['customer'])->group(function () {
    Route::get('/customer', [IndexController::class, 'index'])->name('customer-index');
    Route::get('/customer/add-company', [CompanyController::class, 'addCompanyPage'])->name('customer-add-company');
    Route::get('/customer/my-company', [CompanyController::class, 'index'])->name('customer-company');
    Route::get('/customer/add-order', [OrderController::class, 'addOrder'])->name('add-order');
    Route::get('customer/logout', [AuthController::class, 'logout'])->name('customer-logout');
});