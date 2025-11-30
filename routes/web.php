<?php

use App\Http\Controllers\ReportController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'showIndex'])->name('home');

// Маршрут для страницы с массивом
Route::get('/array', [MainController::class, 'showArray'])->name('array');

Route::get('/reports', [ReportController::class, 'index']) ->name('reports.index');

Route::get('/reports/create', function () { return view('report.create'); })->name('reports.create');

Route::delete('/reports/{report}', [ReportController::class, 'destroy'])->name('reports.destroy');

Route::post('/reports', [ReportController::class, 'store'])->name('reports.store');

Route::get('/reports/{report}/edit', [ReportController::class, 'edit'])->name('reports.edit');

Route::put('/reports/{report}', [ReportController::class, 'update'])->name('reports.update');