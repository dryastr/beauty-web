<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeautyProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\ProductController;
use App\Http\Controllers\Web\WebAboutController;
use App\Http\Controllers\Web\ContactController;

Route::get('/', [DashboardController::class, 'index']);
Route::get('/abouts', [WebAboutController::class, 'index']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/contacts', [ContactController::class, 'index']);

// Route::get('products', [BeautyProductController::class, 'index']);
