<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('home');
})->name('home');

Route::get('/comics', function () {

    // recupera i dati dal file paste.php che abbiamo copiato dentro alla cartella config
    $comics = config("comics");
    // dd($comics);

    return view('comics',[
        'comics' => $comics
    ]);
})->name('comics');

Route::get('/contatti', function () {
    return view('contatti');
})->name('contatti');

Route::get('/chi_siamo', function () {
    return view('chi_siamo');
})->name('chi_siamo');