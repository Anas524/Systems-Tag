<?php

use App\Http\Controllers\StController;
use Illuminate\Support\Facades\Route;

Route::get('/', [StController::class, 'index'])->name('index');
Route::get('/about', [StController::class, 'about'])->name('about');
Route::get('/legal', [StController::class, 'legal'])->name('legal');