<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);

Route::get('/article', [NewsController::class, 'index']);
Route::get('/article/{id}', [NewsController::class, 'show']);