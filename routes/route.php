<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Routing\Route;

Route::get('/products', [ProductController::class, 'index']);        
Route::post('/products', [ProductController::class, 'store']);       
Route::get('/products/{id}', [ProductController::class, 'show']);    