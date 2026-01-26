<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CronController;

Route::get('/send-end-premium', [CronController::class, 'sendEndPremium']);
