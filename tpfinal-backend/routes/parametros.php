<?php
use App\Http\Controllers\ParametrosController;
use Illuminate\Support\Facades\Route;


Route::get('/parametros', [ParametrosController::class, 'index']);
Route::post('/parametros/update', [ParametrosController::class, 'update']);
