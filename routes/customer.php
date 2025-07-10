<?php 

use App\Http\Controllers\Customer\IndexController;
use App\Http\Controllers\Customer\AuthController;
use App\Http\Controllers\Customer\RegistrationController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\Customer\CompanyController;
use App\Http\Controllers\Customer\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/registration/customer', [RegistrationController::class, 'registrationCustomerPage'])->name('registration-customer');
Route::post('/registration/customer', [RegistrationController::class, 'store']);

Route::get('/login/customer', [AuthController::class, 'loginCustomerPage'])->name('login-customer');

Route::post('/login/customer', [AuthController::class, 'loginCustomer']);

Route::middleware(['customer'])->group(function () {
    Route::get('/customer', [IndexController::class, 'index'])->name('customer-index');
    Route::get('/customer/add-company', [CompanyController::class, 'addCompanyPage'])->name('customer-add-company');
    Route::post('/customer/add-company', [CompanyController::class, 'store']);
    Route::get('/customer/my-company', [CompanyController::class, 'index'])->name('customer-company');

    Route::get('/customer/profile', [ProfileController::class, 'index'])->name('customer-profile');
    Route::put('/customer/profile/update', [ProfileController::class, 'update']);

    Route::put('/customer/company/update', [CompanyController::class, 'update'])->name('company-update');
    Route::get('/customer/add-order', [OrderController::class, 'addOrder'])->name('add-order');
    Route::post('/customer/add-order', [OrderController::class, 'store']);
    Route::get('/customer/my-orders', [OrderController::class, 'myOrders'])->name('my-orders');
    Route::get('/customer/order/close/{id}', [OrderController::class, 'orderClose']);
    Route::get('customer/logout', [AuthController::class, 'logout'])->name('customer-logout');

    Route::get('/customer/select-tariff', [ProfileController::class, 'selectTariff'])->name('customer-select-tariff');
    Route::post('/customer/select-tariff', [ProfileController::class, 'selectTariff']);

});