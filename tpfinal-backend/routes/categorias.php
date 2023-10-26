<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


//------ CATEGORIAS DE INSUMOS -------//
Route::get('/administracion/categoriasInsumos', [CategoriaInsumos::class, 'index']);
Route::post('/administracion/categoriasInsumosStore', [CategoriaInsumos::class, 'store']);
Route::delete('/administracion/categoriasInsumosDelete/{id}', [CategoriaInsumos::class, 'delete']);
Route::post('/administracion/categoriasInsumosUpdate/{id}', [CategoriaInsumos::class, 'update']);
Route::get('//administracion/categoriaInsumo/{id}', [CategoriaInsumos::class, 'show']);

//------ CATEGORIAS DE PRODUCTOS -------//
Route::get('/categoriasSets', [CategoriaSetController::class, 'index']);
Route::get('/categoriaSet/{id}', [CategoriaSetController::class, 'show']);
Route::post('/categoriaSetStore', [CategoriaSetController::class, 'store']);
Route::delete('/categoriaSetDelete/{id}', [CategoriaSetController::class, 'delete']);
Route::post('/categoriaSetUpdate/{id}', [CategoriaSetController::class, 'update']);
