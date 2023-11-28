<?php

use App\Http\Controllers\CiudadController;

use Illuminate\Support\Facades\Route;


Route::get('/ciudades', [CiudadController::class, 'index']);
Route::get('/ciudad/{id}', [CiudadController::class, 'show']);
Route::post('/ciudadStore', [CiudadController::class, 'store']);
Route::post('/ciudadUpdate/{id}', [CiudadController::class, 'update']);
Route::delete('/ciudadDelete/{id}', [CiudadController::class, 'delete']);
