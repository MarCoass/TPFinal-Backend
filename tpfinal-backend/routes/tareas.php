<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['rol:1']], function () {
    //rutas de tareas
    Route::get('/tareas', [TareaController::class, 'index']);
    Route::post('/tareaStore', [TareaController::class, 'store']);
    Route::post('/tareaUpdate/{id}', [TareaController::class, 'update']);
    Route::delete('/tareaDelete/{id}', [TareaController::class, 'delete']);
    Route::get('/tarea/{id}', [TareaController::class, 'show']);

    //estados de la tarea
    Route::post('/tareaTerminada/{id}', [TareaController::class, 'cambiarEstado']);
});


