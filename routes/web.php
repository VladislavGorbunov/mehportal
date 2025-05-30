<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

require __DIR__.'/customer.php';

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');


