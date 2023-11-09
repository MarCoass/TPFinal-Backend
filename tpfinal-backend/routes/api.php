<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

require __DIR__.'/auth.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/insumos.php';
require __DIR__ . '/ciudades.php';
require __DIR__ . '/sets.php';
require __DIR__ . '/productos.php';
require __DIR__ . '/tareas.php';
require __DIR__ . '/proveedores.php';
require __DIR__ . '/categorias.php';
require __DIR__ . '/pedidos.php';
require __DIR__ . '/cliente.php';
require __DIR__ . '/parametros.php';
