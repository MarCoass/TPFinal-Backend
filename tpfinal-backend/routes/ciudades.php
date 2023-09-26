<?php

use App\Http\Controllers\CiudadController;

use Illuminate\Support\Facades\Route;


Route::get('/ciudades', [CiudadController::class, 'index']);
Route::get('/ciudad/{id}', [CiudadController::class, 'show']);
