<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisetaController;
use App\Http\Controllers\BotinController;
use App\Http\Controllers\PelotaController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockCalzadoController;
use App\Http\Controllers\ImagenCamisetaController;






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


Route::resource('imagenCamiseta', ImagenCamisetaController::class);




//BOTINES

Route::get('/botines',[
    BotinController::class,
    'index'
])->name('botines.index');


Route::get('/botines/create',[
    BotinController::class,
    'create'
])->name ('botines.create');


Route::post('/botines',[
    BotinController::class,
    'store'
])->name('botines.store');


Route::get('/botines/{botin}',[
    BotinController::class,
    'show'
])->name('botines.show');


Route::get('/botines/{botin}/edit',[
    BotinController::class,
    'edit'
])->name('botines.edit');


Route::put('/botines/{botin}',
    [BotinController::class,
    'update'
])->name('botines.update');


Route::delete('/botines/{botin}',
    [BotinController::class,
    'destroy'
])->name('botines.destroy');








//stock camisetas
Route::get('/camisetas/{camiseta}/stock/create',
    [StockController::class, 'create'])
->name('camisetas.stock.create');




Route::post('/camisetas/{camiseta}/stock',
    [StockController::class, 'store'])
->name('camisetas.stock.store');





//stock botines
Route::get('/botines/{botin}/stock/create',
    [StockCalzadoController::class, 'create'])
->name('botines.stock.create');



Route::post('/botines/{botin}/stock',
    [StockCalzadoController::class, 'store'])
->name('botines.stock.store');









use App\Http\Controllers\AdminController;

Route::get('/admin', [AdminController::class, 'index']);






