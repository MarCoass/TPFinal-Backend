<?php 
use App\Http\Controllers\SetController;
use App\Http\Controllers\CategoriasSetController;
use Illuminate\Support\Facades\Route;

Route::get('/sets',[SetController::class, 'index']);
Route::get('/set/{id}',[SetController::class, 'show']);
Route::post('/setStore',[TipsController::class, 'store']);
Route::delete('/setDelete',[TipsController::class, 'delete']);
Route::post('/setUpdate/{id}',[TipsController::class, 'update']);

Route::get('/categoria/sets',[CategoriasSetController::class, 'index']);
Route::get('/categoria/set/{id}',[CategoriasSetController::class, 'show']);
