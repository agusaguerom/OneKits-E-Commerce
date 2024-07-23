<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
});



Route::get('/contacto', function () {
    return view('tienda.contacto');
});



Route::get('/nosotros', function () {
    return view('tienda.nosotros');
});



use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);


