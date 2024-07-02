<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');



Route::get('/contacto', function () {
    return view('tienda/contacto');
})->name('contacto');


Route::get('/productos', function () {
    return view('tienda/productos');
})->name('productos');


Route::get('/nosotros', function () {
    return view('tienda/nosotros');
})->name('nosotros');



