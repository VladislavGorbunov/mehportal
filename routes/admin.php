<?php 

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\ExecutorController;
use App\Http\Controllers\Admin\TariffsController;
use Illuminate\Support\Facades\Route;

Route::get('/login/admin', [AuthController::class, 'loginAdminPage'])->name('login-admin');
Route::post('/login/admin', [AuthController::class, 'loginAdmin']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [IndexController::class, 'index'])->name('admin-index');
    Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin-logout');

    Route::get('/admin/customers/active', [CustomerController::class, 'getActiveCustomers'])->name('admin-get-active-customers');
    Route::get('/admin/customers/no-active', [CustomerController::class, 'getNoActiveCustomers'])->name('admin-get-noactive-customers');
    Route::get('/admin/customers/premium', [CustomerController::class, 'getPremiumCustomers'])->name('admin-get-premium-customers');
    Route::get('/admin/customers/companies', [CustomerController::class, 'getCustomersCompanies'])->name('admin-customers-companies');
    Route::get('/admin/customer/company/edit/{id}', [CustomerController::class, 'editCustomerCompany'])->name('admin-customer-company-edit');
    Route::post('/admin/customer/company/update', [CustomerController::class, 'updateCustomerCompany']);

    Route::get('/admin/customer/edit/{id}', [CustomerController::class, 'customerEdit'])->name('admin-customer-edit');
    Route::post('/admin/customer/update', [CustomerController::class, 'update']);
    Route::get('/admin/customer/premium-set/{id}', [CustomerController::class, 'premiumSet'])->name('admin-customer-premium-set');
    Route::post('/admin/customer/premium-activation', [CustomerController::class, 'premiumActivation']);


    Route::get('/admin/executors/active', [ExecutorController::class, 'getActiveExecutors'])->name('admin-get-active-executors');
    Route::get('/admin/executors/no-active', [ExecutorController::class, 'getNoActiveExecutors'])->name('admin-get-noactive-executors');
    Route::get('/admin/executors/premium', [ExecutorController::class, 'getPremiumExecutors'])->name('admin-get-premium-executors');
    Route::get('/admin/executors/companies', [ExecutorController::class, 'getExecutorsCompanies'])->name('admin-executors-companies');
    Route::get('/admin/executor/company/edit/{id}', [ExecutorController::class, 'editExecutorCompany'])->name('admin-executor-company-edit');
    Route::post('/admin/executor/company/update', [ExecutorController::class, 'updateExecutorCompany']);

    Route::get('/admin/executor/edit/{id}', [ExecutorController::class, 'executorEdit'])->name('admin-executor-edit');
    Route::post('/admin/executor/update', [ExecutorController::class, 'update']);
    Route::get('/admin/executor/premium-set/{id}', [ExecutorController::class, 'premiumSet'])->name('admin-executor-premium-set');
    Route::post('/admin/executor/premium-activation', [executorController::class, 'premiumActivation']);

    Route::get('/admin/premium-customers-requests', [TariffsController::class, 'customersPremiumRequests'])->name('premium-customers-requests');
    Route::get('/admin/premium-customers-requests/delete/{id}', [TariffsController::class, 'deleteCustomerRequest'])->name('premium-customer-request-delete');

    Route::get('/admin/premium-executors-requests', [TariffsController::class, 'executorsPremiumRequests'])->name('premium-executors-requests');
    Route::get('/admin/premium-executor-requests/delete/{id}', [TariffsController::class, 'deleteExecutorRequest'])->name('premium-executor-request-delete');
});