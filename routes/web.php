<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArrayFunctionsController;

Route::get('/', [ArrayFunctionsController::class, 'index']);

Route::get('/array-functions', [ArrayFunctionsController::class, 'index']);
