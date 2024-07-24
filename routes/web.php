<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamisetaController;
use App\Http\Controllers\AdminController;


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

Route::get('/admin', [AdminController::class, 'index']);






