<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::group(['middleware' => ['rol:1']], function () {
    //rutas de productos
    Route::post('/administracion/productoStore', [ProductosController::class, 'store']);
    Route::delete('/administracion/productoDelete/{id}', [ProductosController::class, 'delete']);
    Route::post('/administracion/productoUpdate/{id}', [ProductosController::class, 'update']);
});

Route::group(['middleware' => ['rol:2']], function () {
    Route::get('/clienteIndex')->name('cliente_index');
});


Route::get('/administracion/producto/{id}', [ProductosController::class, 'show']);
Route::get('/administracion/productos', [ProductosController::class, 'index'])->name('productos');

require __DIR__ . '/auth.php';
require __DIR__ . '/insumos.php';
require __DIR__ . '/ciudades.php';
require __DIR__ . '/sets.php';
