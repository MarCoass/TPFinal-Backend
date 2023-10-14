<?php

use App\Http\Controllers\InsumoProductoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::group(['middleware' => ['rol:1']], function () {
    //rutas de productos
    Route::post('/administracion/productoStore', [ProductosController::class, 'store']);
    Route::delete('/administracion/productoDelete/{id}', [ProductosController::class, 'delete']);
    Route::post('/administracion/productoUpdate/{id}', [ProductosController::class, 'update']);
    Route::get('/insumosUsados/{id}', [InsumoProductoController::class, 'buscarPorProducto']);
});

Route::get('/administracion/producto/{id}', [ProductosController::class, 'show']);
Route::get('/administracion/productos', [ProductosController::class, 'index'])->name('productos');

Route::post('/modificarCantidad', [InsumoProductoController::class, 'actualizarCantidad']);