<?php

use Illuminate\Support\Facades\Route;

Route::domain('refuge-animalier.test')->group(function () {

    // Pages statiques du site client
    Route::view('/', 'client.home')->name('home');
    Route::view('/about', 'client.about')->name('about');
    Route::view('/volunteers', 'client.volunteers')->name('volunteers');
    Route::view('/adoption', 'client.adoption')->name('adoption');
    Route::view('/descriptionAnimal', 'client.descriptionAnimal')->name('descriptionAnimal');
    Route::view('/contact', 'client.contact')->name('contact');

});



Route::domain('admin.refuge-animalier.test')->group(function () {
    Route::get('/', function () {
        return view('components/admin/layouts.login');
    })->name('login');
});


