<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showIndex'])->name('home');

// Маршрут для страницы с массивом
Route::get('/array', [MainController::class, 'showArray'])->name('array');

