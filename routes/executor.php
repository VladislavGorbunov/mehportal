<?php 


use App\Http\Controllers\Executor\AuthController;

Route::get('/login/executor', [AuthController::class, 'loginExecutorPage'])->name('login-executor');
Route::post('/login/executor', [AuthController::class, 'loginExecutor']);

Route::middleware(['executor'])->group(function () {
    Route::get('/executor/logout', [AuthController::class, 'logout']);
});