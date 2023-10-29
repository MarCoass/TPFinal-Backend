<?php

use App\Http\Controllers\CarritoController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['rol:2']], function () {
    Route::get('/carrito', [CarritoController::class, 'verCarritoActual']);
    Route::post('/agregar-producto', [CarritoController::class, 'agregarProducto']);
    Route::post('/eliminar-producto', [CarritoController::class, 'eliminarProducto']);
    Route::get('/comprar', [CarritoController::class, 'comprarCarrito']);
});

Route::get('/ver-carritos/{id_usuario}', [CarritoController::class, 'verCarritosUsuario']);
Route::get('/ver-carrito/{id_carrito}', [CarritoController::class, 'verCarrito']);