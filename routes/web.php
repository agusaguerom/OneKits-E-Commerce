<?php

use App\Http\Controllers\CamisetaController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


Route::get('/', function () {
    return view('inicio');
});



Route::get('/contacto', function () {
    return view('tienda.contacto');
});
Route::get('/camisetas', [
    CamisetaController::class,
    'index'
]);
Route::resource('/camisetas', CamisetaController::class)->middleware('isAdmin');


Route::get('/nosotros', function () {
    return view('tienda.nosotros');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
