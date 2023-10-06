<?php 
use App\Http\Controllers\SetController;
use App\Http\Controllers\CategoriaSetController;
use Illuminate\Support\Facades\Route;

Route::get('/sets',[SetController::class, 'index']);
Route::get('/set/{id}',[SetController::class, 'show']);
Route::post('/setStore',[SetController::class, 'store']);
Route::delete('/setDelete/{id}',[SetController::class, 'delete']);
Route::post('/setUpdate/{id}',[SetController::class, 'update']);

Route::get('/categoriasSets',[CategoriaSetController::class, 'index']);
Route::get('/categoriaSet/{id}',[CategoriaSetController::class, 'show']);

Route::get('/esSet/{id}', [SetController::class, 'esSet']);