<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\EquipoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TipoMarcaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CamisetaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BotinController;
use App\Http\Controllers\PelotaController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\StockCalzadoController;
use App\Http\Controllers\ImagenCamisetaController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\ProductoController;


Route::get('/a', function () {
    return view('welcome');
});



Route::get('/a', function () {
    return view('welcome');
});


Route::get('/',[
    CamisetaController::class,
    'indexInicio'
])->name('inicio');

Route::get('/adidas',[
    CamisetaController::class,
    'filtroAdidas'
])->name('adidas');

Route::get('/nike',[
    CamisetaController::class,
    'filtroNike'
])->name('nike');

Route::get('/puma',[
    CamisetaController::class,
    'filtroPuma'
])->name('puma');


Route::get('/contacto', function () {
    return view('tienda.contacto');
});
Route::post('/contacto', [ContactoController::class, 'store'])->name('contactoform');





Route::get('/nosotros', function () {
    return view('tienda.nosotros');
});
Route::get('/productos',[
    CamisetaController::class,
        'indexTienda'
        ])->name('productos');





// camisetas

Route::get('/camisetas',[CamisetaController::class,'index'])->name('camisetas.index');


Route::get('/productos',[CamisetaController::class,'indexTienda'])->name('productos');


Route::get('/productos/camisetas/{camiseta}',[CamisetaController::class,'showtienda'])->name('camisetas.select');


Route::get('/camisetas/create',[CamisetaController::class,'create'])->name('camisetas.create');







//MIDDLEWARE
Route::middleware('is_admin')->group(function () {

    Route::get('/admin', [AdminController::class, 'index']);

     // Usuarios
     Route::get('/usuarios', [UserController::class, 'index'])->name('admin.usuarios.index');
     Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('admin.usuarios.usuariosedit');
     Route::put('usuarios/{user}', [UserController::class, 'update'])->name('admin.usuarios.usuariosupdate');
     Route::delete('usuarios/{user}', [UserController::class, 'destroy'])->name('admin.usuarios.usuariosdestroy');
     Route::get('usuarios/{user}/changerol', [UserController::class, 'changerol'])->name('admin.usuarios.changerol');

     
     Route::get('/gestionadmin', [AdminController::class, 'index'])->name('admin.usuarios.admin');
     Route::get('/gestionadmin/{user}/edit', [AdminController::class, 'edit'])->name('admin.usuarios.adminedit');
     Route::put('gestionadmin/{user}', [AdminController::class, 'update'])->name('admin.usuarios.adminupdate');
     Route::delete('gestionadmin/{user}', [AdminController::class, 'destroy'])->name('admin.usuarios.admindestroy');
     
     Route::get('/usuarios/create', [UserController::class, 'create'])->name('usuarios.create');
 
     // Camisetas
     Route::get('/camisetas', [CamisetaController::class, 'index'])->name('camisetas.index');
     Route::post('/camisetas', [CamisetaController::class, 'store'])->name('camisetas.store');
     Route::get('/camisetas/{camiseta}', [CamisetaController::class, 'show'])->name('camisetas.show');
     Route::get('/camisetas/{camiseta}/edit', [CamisetaController::class, 'edit'])->name('camisetas.edit');
     Route::put('/camisetas/{camiseta}', [CamisetaController::class, 'update'])->name('camisetas.update');
     Route::delete('/camisetas/{camiseta}', [CamisetaController::class, 'destroy'])->name('camisetas.destroy');
 
     Route::get('/camisetas/{camiseta}/stock/create', [StockController::class, 'create'])->name('camisetas.stock.create');
     Route::post('/camisetas/{camiseta}/stock', [StockController::class, 'store'])->name('camisetas.stock.store');
 
     // Marca
     Route::get('/marca/create', [TipoMarcaController::class, 'create'])->name('marca.create');
     Route::post('/crearmarca', [TipoMarcaController::class, 'store'])->name('marcas.store');
 
     // Equipos
     Route::get('/equipos/create', [EquipoController::class, 'create'])->name('equipos.create');
     Route::post('/crearequipo', [EquipoController::class, 'store'])->name('equipos.store');


});
// Fin de Middleware






Route::resource('imagenCamiseta', ImagenCamisetaController::class);


//stock camisetas
Route::get('/camisetas/{camiseta}/stock/create',[StockController::class, 'create'])->name('camisetas.stock.create');

Route::post('/camisetas/{camiseta}/stock',[StockController::class, 'store'])->name('camisetas.stock.store');


//MARCA
Route::get('/marca/create', [
    TipoMarcaController::class,
    'create'
])->name('marca.create');











//stock camisetas
Route::get('/botines',[BotinController::class,'index'])->name('botines.index');


// Crear nuevo botín
Route::get('/botines/create',[BotinController::class,'create'])->name ('botines.create');
Route::post('/botines',[BotinController::class,'store'])->name('botines.store');


// Mostrar botín específico
Route::get('/botines/{botin}',[BotinController::class,'show'])->name('botines.show');


// Editar botín específico
Route::get('/botines/{botin}/edit',[BotinController::class,'edit'])->name('botines.edit');
Route::put('/botines/{botin}',[BotinController::class,'update'])->name('botines.update');


//eliminar botin
Route::delete('/botines/{botin}',[BotinController::class,'destroy'])->name('botines.destroy');


//stock botines
Route::get('/botines/{botin}/stock/create',[StockCalzadoController::class, 'create']) ->name('botines.stock.create');
Route::post('/botines/{botin}/stock',[StockCalzadoController::class, 'store'])->name('botines.stock.store');


//mostrar botin en tienda
Route::get('/productos/botines/{botin}',[BotinController::class, 'showtienda'])->name('botines.select');


















//carrito
Route::get('/carrito',[CarritoController::class, 'index'])->name('carrito.index');

Route::post('/carrito/add',[CarritoController::class, 'add'])->name('carrito.add');

Route::patch('/carrito/update/{id}',[CarritoController::class, 'update'])->name('carrito.update');

Route::delete('/carrito/remove/{id}',[CarritoController::class, 'remove'])->name('carrito.remove');

Route::get('carrito/checkout',[CarritoController::class, 'checkout'])->name('carrito.checkout');

Route::post('carrito/complete',[CarritoController::class, 'complete'])->name('carrito.complete');





Route::get('/productos',[ProductoController::class, 'index'])->name('productos.index');
















Route::get('/dashboard', function () {
    return view('inicio');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/carrito/complete', [CarritoController::class, 'complete'])->name('carrito.complete');
    Route::get('/carrito/checkout', [CarritoController::class, 'checkout'])->name('carrito.checkout');



});

require __DIR__.'/auth.php';



