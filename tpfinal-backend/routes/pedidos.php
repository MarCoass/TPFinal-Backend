<?php

use App\Http\Controllers\PedidosController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['rol:1']], function () {
    Route::get('/administracion/pedidos', [PedidosController::class, 'index']);
    Route::get('/administracion/pedido/{id}', [PedidosController::class, 'show']);
 
});

Route::get('/pedidos/{id}', [PedidosController::class, 'pedidosUsuario']);
Route::post('/administracion/pedido/cambiarEstado/{id}', [PedidosController::class, 'cambiarEstado']);