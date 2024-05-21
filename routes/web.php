<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function () {
    return view('comics');
})->name('comics');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
})->name('chi_siamo');