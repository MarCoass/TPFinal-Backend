<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

Route::group(['middleware' => ['rol:1']], function () {
    //rutas de productos
});

Route::group(['middleware' => ['rol:2']], function () {
    Route::get('/clienteIndex')->name('cliente_index');
});

Route::get('/administracion/productos', [ProductosController::class, 'index'])->name('productos');

require __DIR__ . '/auth.php';
