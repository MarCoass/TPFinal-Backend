<?php

use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;


Route::get('/administracion/clientes', [ClienteController::class, 'index']);
Route::get('/administracion/cliente/{id}', [ClienteController::class, 'show']);
Route::get('/administracion/clientePedidos/{id}', [ClienteController::class, 'pedidos']);
Route::post('/administracion/clienteComentar/{id}', [ClienteController::class, 'comentar']);
