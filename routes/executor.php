<?php 


use App\Http\Controllers\Executor\AuthController;
use App\Http\Controllers\Executor\RegistrationController;

Route::get('/login/executor', [AuthController::class, 'loginExecutorPage'])->name('login-executor');
Route::post('/login/executor', [AuthController::class, 'loginExecutor']);

Route::get('/registration/executor', [RegistrationController::class, 'registrationExecutorPage'])->name('registration-executor');
Route::post('/registration/executor', [RegistrationController::class, 'store']);

Route::middleware(['executor'])->group(function () {
    Route::get('/executor/logout', [AuthController::class, 'logout']);
});