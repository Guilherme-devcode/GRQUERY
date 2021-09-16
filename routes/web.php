<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\QueryController;

Route::get('/home', [QueryController::class, 'index']);

Route::get('/', function () {
    return view('layouts.sidebarmenu');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
