<?php

use Illuminate\Http\Request;
use App\Http\Controllers\SoapController;
use App\Http\Controllers\TipsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});



Route::group(['middleware' => ['rol:2']], function () {
    Route::get('/clienteIndex')->name('cliente_index');
});


require __DIR__ . '/auth.php';
require __DIR__ . '/insumos.php';
require __DIR__ . '/ciudades.php';
require __DIR__ . '/sets.php';
require __DIR__ . '/productos.php';
require __DIR__ . '/whatsapp.php';


//para el tp de frameworks
Route::get('pruebaSOAP/{tips}/{cantNecesaria}',[ SoapController::class, 'consume']);
