<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/pricing', function () {
    return view('pricing');
})->name('pricing');

Route::get('/computer-support', function () {
    return view('computer-support');
})->name('computer-support');

Route::get('/networking-support', function () {
    return view('networking-support');
})->name('networking-support');
