<?php

use App\Http\Controllers\Api\ProductController;
use Illuminate\Routing\Route;

Route::get('/products', [ProductController::class, 'index']);        
