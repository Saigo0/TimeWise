<?php

use App\Http\Controllers\ComparisonController;
use App\Http\Controllers\LazyActivityController;
use App\Http\Controllers\NiceActivityController;
use App\Http\Controllers\UserController;
use App\Models\NiceActivity;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('user', UserController::class);
Route::resource('lazy-activities', LazyActivityController::class);
Route::resource('nice-activities', NiceActivityController::class);

Route::get('/compare/{lazyId}', [ComparisonController::class, 'index'])->name('compare.index');
Route::post('/calculate', [ComparisonController::class, 'calculate'])->name('compare.calculate');


