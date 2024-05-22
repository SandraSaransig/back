<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;

//Rutas no autenticadas

Route::get('/', [DashBoardController::class, 'index']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    //Rutas autenticadas
    Route::get('/dashboard', [DashBoardController::class, 'dashboard'])->name('dashboard');

    //Rutas propias vincularlas con los controladores
    Route::resource('/categories', CategoryController::class);
    Route::resource('/products', ProductController::class);
    Route::resource('/roles', RoleController::class);

});
//Rutas personalizadas para las pagians de productos BMW y Mercedes
Route::get('/products/bmw', [ProductController::class, 'bmw'])->name('bmw');
Route::get('/products/mercedes', [ProductController::class, 'mercedes'])->name('mercedes');

//Rutas para la pagina de  acerca de
Route::get('/about',[PageController::class, 'about'])->name('about');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');


