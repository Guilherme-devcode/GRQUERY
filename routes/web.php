<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\QueryController;

Route::get('/', [QueryController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
