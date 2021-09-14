<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('layouts.sidebarmenu');
});

Route::get('/home', function () {
    return view('home');
});