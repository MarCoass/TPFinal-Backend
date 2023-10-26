<?php

use App\Http\Controllers\CategoriaInsumosController;
use App\Http\Controllers\UserController;
use App\Models\CategoriaSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



//------ CATEGORIAS DE INSUMOS -------//
Route::get('/administracion/categoriasInsumos', [CategoriaInsumosController::class, 'index']);
Route::post('/administracion/categoriasInsumosStore', [CategoriaInsumosController::class, 'store']);
Route::delete('/administracion/categoriasInsumosDelete/{id}', [CategoriaInsumosController::class, 'delete']);
Route::post('/administracion/categoriasInsumosUpdate/{id}', [CategoriaInsumosController::class, 'update']);
Route::get('/administracion/categoriaInsumo/{id}', [CategoriaInsumosController::class, 'show']);

//------ CATEGORIAS DE PRODUCTOS -------//
Route::get('/categoriasSets', [CategoriaSetController::class, 'index']);
Route::get('/categoriaSet/{id}', [CategoriaSetController::class, 'show']);
Route::post('/categoriaSetStore', [CategoriaSetController::class, 'store']);
Route::delete('/categoriaSetDelete/{id}', [CategoriaSetController::class, 'delete']);
Route::post('/categoriaSetUpdate/{id}', [CategoriaSetController::class, 'update']);
