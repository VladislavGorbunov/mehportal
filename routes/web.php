<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\BlogController;

require __DIR__.'/customer.php';
require __DIR__.'/executor.php';
require __DIR__.'/admin.php';
require __DIR__.'/seller.php';
require __DIR__.'/cron.php';


Route::get('/', [PagesController::class, 'index'])->name('index');
Route::get('/metal-calculator', [PagesController::class, 'calculator'])->name('calculator');
Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
Route::get('/tariffs', [PagesController::class, 'tariffs'])->name('tariffs');
Route::get('/privacy-policy', [PagesController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/dogovor-oferta', [PagesController::class, 'dogovor'])->name('dogovor');
Route::get('/documents', [PagesController::class, 'documentsPage'])->name('documents');
Route::get('/blog', [BlogController::class, 'blog'])->name('blog');
Route::get('/article/{slug}', [BlogController::class, 'article'])->name('article');
Route::get('/add-order', [PagesController::class, 'addOrderPage'])->name('add-order-page');

Route::get('/{region_slug}', [PagesController::class, 'cityIndexPage'])->name('city-index');
Route::get('/{region_slug}/orders/service/{service_slug}', [OrdersController::class, 'getOrdersForServicesRegion']);
Route::get('/{region_slug}/orders/category/{category_slug}', [OrdersController::class, 'getOrdersForCategoriesregion']);

Route::get('/orders/service/{service_slug}', [OrdersController::class, 'getOrdersForServices']);
Route::get('/orders/category/{category_slug}', [OrdersController::class, 'getOrdersForCategories']);

Route::get('/companies/service/{service_slug}', [CompaniesController::class, 'getCompaniesForServices']);
Route::get('/{region_slug}/companies/service/{service_slug}', [CompaniesController::class, 'getCompaniesForServicesregion']);

Route::get('/companies/category/{category_slug}', [CompaniesController::class, 'getCompaniesForCategory']);
Route::get('/{region_slug}/companies/category/{category_slug}', [CompaniesController::class, 'getCompaniesForCategoryRegion']);

Route::get('/company/{inn}', [CompaniesController::class, 'companyPage']);

Route::get('/order/{order_id}', [OrdersController::class, 'getOrder']);
Route::get('/order/{order_id}/send-cp', [OrdersController::class, 'sendCP']);
Route::post('/order/{order_id}/send-cp', [OrdersController::class, 'storeCP']);