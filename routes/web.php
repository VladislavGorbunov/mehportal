<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OrdersController;

require __DIR__.'/customer.php';
require __DIR__.'/executor.php';
require __DIR__.'/admin.php';

Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
Route::get('/tariffs', [PagesController::class, 'tariffs'])->name('tariffs');

Route::get('/{region_slug}', [PagesController::class, 'cityIndexPage'])->name('city-index');
Route::get('/{region_slug}/orders/service/{service_slug}', [OrdersController::class, 'getOrdersForServicesRegion']);
Route::get('/{region_slug}/orders/category/{category_slug}', [OrdersController::class, 'getOrdersForCategoriesregion']);

Route::get('/orders/service/{service_slug}', [OrdersController::class, 'getOrdersForServices']);
Route::get('/orders/category/{category_slug}', [OrdersController::class, 'getOrdersForCategories']);

Route::get('/order/{order_id}', [OrdersController::class, 'getOrder']);