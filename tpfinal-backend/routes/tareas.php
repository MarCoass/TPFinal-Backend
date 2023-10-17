<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['rol:1']], function () {
    //rutas de tareas
    Route::get('/tareas', [TareaController::class, 'index']);
    Route::post('/tareaStore', [TareaController::class, 'store']);
    Route::post('/tareaUpdate', [TareaController::class, 'update']);
    Route::delete('/tareaDelete', [TareaController::class, 'delete']);
    Route::delete('/tarea/{id}', [TareaController::class, 'show']);
});


