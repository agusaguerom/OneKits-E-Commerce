<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});


Route::get('/tienda', function () {
    return view('tienda/contacto');
});
