<?php 

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\ExecutorController;
use App\Http\Controllers\Admin\TariffsController;
use App\Http\Controllers\Admin\SitemapController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\OrderController;
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
    Route::get('/admin/add-customer', [CustomerController::class, 'addCustomerPage'])->name('admin-add-customer');
    Route::post('/admin/add-customer', [CustomerController::class, 'addCustomer']);
    Route::get('/admin/add-order/{id}', [OrderController::class, 'addOrderPage'])->name('admin-add-order');
    Route::post('/admin/add-order/{id}', [OrderController::class, 'store']);
    
    Route::get('/admin/customer/add-company', [CompanyController::class, 'addCompanyPage'])->name('admin-add-customer-company');
    Route::post('/admin/customer/add-company', [CompanyController::class, 'addCompany']);
    

    Route::get('/admin/customer/edit/{id}', [CustomerController::class, 'customerEdit'])->name('admin-customer-edit');
    Route::get('/admin/customer/delete/{id}', [CustomerController::class, 'customerDelete'])->name('admin-customer-delete');
    Route::post('/admin/customer/update', [CustomerController::class, 'update']);
    Route::get('/admin/customer/premium-set/{id}', [CustomerController::class, 'premiumSet'])->name('admin-customer-premium-set');
    Route::post('/admin/customer/premium-activation', [CustomerController::class, 'premiumActivation']);


    Route::get('/admin/executors/active', [ExecutorController::class, 'getActiveExecutors'])->name('admin-get-active-executors');
    Route::get('/admin/executors/no-active', [ExecutorController::class, 'getNoActiveExecutors'])->name('admin-get-noactive-executors');
    Route::get('/admin/executors/premium', [ExecutorController::class, 'getPremiumExecutors'])->name('admin-get-premium-executors');
    Route::get('/admin/executors/companies', [ExecutorController::class, 'getExecutorsCompanies'])->name('admin-executors-companies');
    Route::get('/admin/executor/company/edit/{id}', [ExecutorController::class, 'editExecutorCompany'])->name('admin-executor-company-edit');
    Route::get('/admin/executor/company/delete/{id}', [ExecutorController::class, 'deleteExecutorCompany'])->name('admin-executor-company-delete');
    Route::post('/admin/executor/company/update', [ExecutorController::class, 'updateExecutorCompany']);

    Route::get('/admin/executor/edit/{id}', [ExecutorController::class, 'executorEdit'])->name('admin-executor-edit');
    Route::post('/admin/executor/update', [ExecutorController::class, 'update']);
    Route::get('/admin/executor/delete/{id}', [ExecutorController::class, 'executorDelete'])->name('admin-executor-delete');
    Route::get('/admin/executor/premium-set/{id}', [ExecutorController::class, 'premiumSet'])->name('admin-executor-premium-set');
    Route::post('/admin/executor/premium-activation', [executorController::class, 'premiumActivation']);

    Route::get('/admin/premium-customers-requests', [TariffsController::class, 'customersPremiumRequests'])->name('premium-customers-requests');
    Route::get('/admin/premium-customers-requests/delete/{id}', [TariffsController::class, 'deleteCustomerRequest'])->name('premium-customer-request-delete');

    Route::get('/admin/premium-executors-requests', [TariffsController::class, 'executorsPremiumRequests'])->name('premium-executors-requests');
    Route::get('/admin/premium-executor-requests/delete/{id}', [TariffsController::class, 'deleteExecutorRequest'])->name('premium-executor-request-delete');

    Route::get('/admin/categories/all', [CategoryController::class, 'index'])->name('admin-categories-all');
    Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin-category-edit');
    Route::get('/admin/category/add', [CategoryController::class, 'add'])->name('admin-category-add');
    Route::post('/admin/category/add', [CategoryController::class, 'store']);
    Route::get('/admin/category/delete/{id}', [CategoryController::class, 'delete'])->name('admin-category-delete');
    Route::post('/admin/category/update', [CategoryController::class, 'update']);
    
    Route::get('/admin/services/all', [ServiceController::class, 'index'])->name('admin-services-all');
    Route::get('/admin/service/edit/{id}', [ServiceController::class, 'edit'])->name('admin-service-edit');
    Route::post('/admin/service/update', [ServiceController::class, 'update']);
    Route::get('/admin/service/add', [ServiceController::class, 'add'])->name('admin-service-add');
    Route::post('/admin/service/add', [ServiceController::class, 'store']);
    Route::get('/admin/service/delete/{id}', [ServiceController::class, 'delete'])->name('admin-service-delete');
    
    Route::get('/admin/active-orders', [OrderController::class, 'activeOrders'])->name('active-orders');
    Route::get('/admin/archive-orders', [OrderController::class, 'archiveOrders'])->name('archive-orders');
    Route::get('/admin-order-edit/{id}', [OrderController::class, 'orderEdit'])->name('admin-order-edit');
    
    Route::get('/admin/sitemap-generate', [SitemapController::class, 'generate'])->name('sitemap-generate');
});