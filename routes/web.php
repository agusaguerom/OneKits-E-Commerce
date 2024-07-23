<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisetaController;


Route::get('/', function () {
    return view('inicio');
});



Route::get('/contacto', function () {
    return view('tienda.contacto');
});



Route::get('/nosotros', function () {
    return view('tienda.nosotros');
});




// camisetas

Route::get('/camisetas',[
    CamisetaController::class,
    'index'
]);


use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);




