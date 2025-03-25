<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});

Route::get('/juegos', function () {
    return view('juegos');
});

Route::get('/noticias', function () {
    return view('noticias');
});

Route::get('/reseñas', function () {
    return view('reseñas');
});

Route::get('/contacto', function () {
    return view('contacto');
});
