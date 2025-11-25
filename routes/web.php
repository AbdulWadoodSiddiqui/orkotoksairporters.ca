<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('book-online', function () {
    return view('book');
})->name('book');

Route::get('about-us', function () {
    return view('about');
})->name('about');

Route::get('our-services', function () {
    return view('services');
})->name('services');

Route::get('our-services', function () {
    return view('services');
})->name('services');

Route::get('contact-us', function () {
    return view('contact');
})->name('contact');