<?php 

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;

Route::get('/login/admin', [AuthController::class, 'loginAdminPage'])->name('login-admin');
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [IndexController::class, 'index'])->name('admin-index');
    Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin-logout');

    Route::get('/admin/customers/active', [CustomerController::class, 'getActiveCustomers'])->name('admin-get-active-customers');
    Route::get('/admin/customers/no-active', [CustomerController::class, 'getNoActiveCustomers'])->name('admin-get-noactive-customers');
    Route::get('/admin/customers/premium', [CustomerController::class, 'getPremiumCustomers'])->name('admin-get-premium-customers');
    Route::get('/admin/customer/edit/{id}', [CustomerController::class, 'customerEdit'])->name('admin-customer-edit');
    Route::post('/admin/customer/update', [CustomerController::class, 'update']);
    Route::get('/admin/customer/premium-set/{id}', [CustomerController::class, 'premiumSet'])->name('admin-customer-premium-set');
    Route::post('/admin/customer/premium-activation', [CustomerController::class, 'premiumActivation']);
});