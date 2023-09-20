<?php

use App\Http\Controllers\InsumosController;
use App\Http\Controllers\TipsController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware'=>['rol:1']], function(){

    Route::get('/administracion/insumos',[InsumosController::class, 'index']);
    Route::post('/administracion/insumosStore',[InsumosController::class, 'store']);
    Route::delete('/administracion/insumosDelete',[InsumosController::class, 'delete']);
    Route::post('/administracion/insumosUpdate',[InsumosController::class, 'update']);

    Route::get('/administracion/tips',[TipsController::class, 'index']);
    Route::post('/administracion/tipsStore',[TipsController::class, 'store']);
    Route::delete('/administracion/tipsDelete',[TipsController::class, 'delete']);
    Route::post('/administracion/tipsUpdate',[TipsController::class, 'update']);

    Route::get('/administracion/esmaltes',[EsmaltesController::class, 'index']);
    Route::post('/administracion/esmaltesStore',[EsmaltesController::class, 'store']);
    Route::delete('/administracion/esmaltesDelete',[EsmaltesController::class, 'delete']);
    Route::post('/administracion/esmaltesUpdate',[EsmaltesController::class, 'update']);

});