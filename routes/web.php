<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home');
})->name('home');
Route::get('/about', function () {
    return view('client.about');
})->name('about');
