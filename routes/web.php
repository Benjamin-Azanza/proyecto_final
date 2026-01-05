<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\BodegaController;

Route::get('/', [ProductoController::class, 'index']);

Route::resource('productos', ProductoController::class);
Route::resource('clientes', ClienteController::class);
Route::resource('proveedores', ProveedorController::class);
Route::resource('bodegas', BodegaController::class);
