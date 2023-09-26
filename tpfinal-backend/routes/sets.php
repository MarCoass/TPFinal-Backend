<?php 
use App\Http\Controllers\SetController;
use App\Http\Controllers\CategoriaSetController;
use Illuminate\Support\Facades\Route;

Route::get('/sets',[SetController::class, 'index']);
Route::get('/set/{id}',[SetController::class, 'show']);
Route::post('/setStore',[SetController::class, 'store']);
Route::delete('/setDelete',[SetController::class, 'delete']);
Route::post('/setUpdate/{id}',[SetController::class, 'update']);

Route::get('/categoriasSets',[CategoriaSetController::class, 'index']);