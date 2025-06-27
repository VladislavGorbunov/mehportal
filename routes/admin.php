<?php 

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\IndexController;



Route::get('/login/admin', [AuthController::class, 'loginAdminPage'])->name('login-admin');

Route::post('/login/admin', [AuthController::class, 'loginAdmin']);

Route::middleware(['admin'])->group(function () {
    Route::get('/admin', [IndexController::class, 'index'])->name('admin-index');
   
});