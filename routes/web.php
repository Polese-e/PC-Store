<?php
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TimerController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index']);
Route::get('/products/{id}', [ProductController::class, 'show']);
Route::get('/timer', [TimerController::class, 'getTime']);
