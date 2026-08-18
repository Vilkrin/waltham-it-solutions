<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/', function () {
    return view('coming-soon');
})->name('coming-soon');

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

Route::get('/project-submission', function () {
    return view('project-submission');
})->name('project-submission');

Route::get('/computer-support', function () {
    return view('computer-support');
})->name('computer-support');

Route::get('/networking-support', function () {
    return view('networking-support');
})->name('networking-support');
