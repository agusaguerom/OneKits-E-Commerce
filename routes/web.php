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
    ])->name('camisetas.index');


Route::get('/camisetas/create',[
    CamisetaController::class,
    'create'
])->name ('camisetas.create');


Route::post('/camisetas',[
    CamisetaController::class,
    'store'
])->name('camisetas.store');


Route::get('/camisetas/{camiseta}',[
    CamisetaController::class,
    'show'
])->name('camisetas.show');


Route::get('/camisetas/{camiseta}/edit',[
    CamisetaController::class,
    'edit'
])->name('camisetas.edit');


Route::put('/camisetas/{camiseta}',
    [CamisetaController::class,
    'update'
])->name('camisetas.update');


Route::delete('/camisetas/{camiseta}',
    [CamisetaController::class,
    'destroy'
])->name('camisetas.destroy');










use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);






