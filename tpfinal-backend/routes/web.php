<?php

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
    Route::get('/adminIndex')->name('admin_index');
});

Route::group(['middleware' => ['rol:2']], function () {
    Route::get('/clienteIndex')->name('cliente_index');
});


require __DIR__ . '/auth.php';
