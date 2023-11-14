<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['rol:2']], function () {
    Route::get('/favoritos', [UserController::class, 'obtenerListadoFavoritos']);
    Route::post('/favorito-agregar', [UserController::class, 'agregarAFavoritos']);
    Route::post('/favorito-eliminar', [UserController::class, 'eliminarDeFavoritos']);
});


