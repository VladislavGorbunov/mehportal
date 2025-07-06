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
});