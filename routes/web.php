<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CamisetaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BotinController;
use App\Http\Controllers\PelotaController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockCalzadoController;
use App\Http\Controllers\ImagenCamisetaController;

Route::get('/a', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('inicio');
})->name('inicio');



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

Route::get('/productos',[
    CamisetaController::class,
        'indexTienda'
        ])->name('productos');

        Route::get('/productos/{camiseta}',[
            CamisetaController::class,
            'showtienda'
        ])->name('camisetas.select');



Route::get('/camisetas/create',[
    CamisetaController::class,
    'create'
])->name ('camisetas.create');

// Usuarios
Route::get('/usuarios',[
    UserController::class, 'index'
])->name('admin.usuarios.index');


Route::get('/usuarios/{user}/edit', [
    UserController::class,
    'edit'
])->name('admin.usuarios.usuariosedit');

Route::put('usuarios/{user}', [
    UserController::class,
    'update'
])->name('admin.usuarios.usuariosupdate');

Route::delete('usuarios/{user}',[
    UserController::class,
    'destroy'
])->name('admin.usuarios.usuariosdestroy');


Route::get('/gestionadmin',[
    AdminController::class, 'index'
])->name('admin.usuarios.admin');

Route::get('/gestionadmin/{user}/edit', [
    AdminController::class,
    'edit'
])->name('admin.usuarios.adminedit');

Route::put('gestionadmin/{user}', [
    AdminController::class,
    'update'
])->name('admin.usuarios.adminupdate');

Route::delete('gestionadmin/{user}',[
    AdminController::class,
    'destroy'
])->name('admin.usuarios.admindestroy');


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










Route::get('/admin', [AdminController::class, 'index']);

Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




