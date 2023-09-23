<?php

use App\Http\Controllers\CategoriaInsumos;
use App\Http\Controllers\InsumosController;
use App\Http\Controllers\TipsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['rol:1']], function(){

    Route::get('/administracion/insumos',[InsumosController::class, 'index']);
    Route::post('/administracion/insumoStore',[InsumosController::class, 'store']);
    Route::delete('/administracion/insumosDelete/{id}',[InsumosController::class, 'delete']);
    Route::post('/administracion/insumosUpdate/{id}',[InsumosController::class, 'update']);

    Route::get('/administracion/tips',[TipsController::class, 'index']);
    Route::post('/administracion/tipsStore',[TipsController::class, 'store']);
    Route::delete('/administracion/tipsDelete/{id}',[TipsController::class, 'delete']);
    Route::post('/administracion/tipsUpdate/{id}',[TipsController::class, 'update']);

    Route::get('/administracion/esmaltes',[EsmaltesController::class, 'index']);
    Route::post('/administracion/esmaltesStore',[EsmaltesController::class, 'store']);
    Route::delete('/administracion/esmaltesDelete/{id}',[EsmaltesController::class, 'delete']);
    Route::post('/administracion/esmaltesUpdate/{id}',[EsmaltesController::class, 'update']);

    Route::get('/administracion/categoriasInsumos',[CategoriaInsumos::class, 'index']);
    Route::post('/administracion/categoriasInsumosStore',[CategoriaInsumos::class, 'store']);
    Route::delete('/administracion/categoriasInsumosDelete/{id}',[CategoriaInsumos::class, 'delete']);
    Route::post('/administracion/categoriasInsumosUpdate/{id}',[CategoriaInsumos::class, 'update']);

});