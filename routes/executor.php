<?php 


use App\Http\Controllers\Executor\AuthController;
use App\Http\Controllers\Executor\RegistrationController;
use App\Http\Controllers\Executor\IndexController;
use App\Http\Controllers\Executor\CompanyController;

Route::get('/login/executor', [AuthController::class, 'loginExecutorPage'])->name('login-executor');
Route::post('/login/executor', [AuthController::class, 'loginExecutor']);

Route::get('/registration/executor', [RegistrationController::class, 'registrationExecutorPage'])->name('registration-executor');
Route::post('/registration/executor', [RegistrationController::class, 'store']);

Route::middleware(['executor'])->group(function () {
    Route::get('/executor', [IndexController::class, 'index'])->name('executor-index');
    Route::get('/executor/add-company', [CompanyController::class, 'addCompanyPage'])->name('executor-add-company');
    Route::post('/executor/add-company', [CompanyController::class, 'store']);
    Route::get('/executor/my-company', [CompanyController::class, 'index'])->name('executor-company');
    Route::put('/executor/company/update', [CompanyController::class, 'update'])->name('executor-update');
    Route::get('/executor/logout', [AuthController::class, 'logout'])->name('executor-logout');
});