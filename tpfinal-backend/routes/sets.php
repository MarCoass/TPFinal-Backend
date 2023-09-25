<?php 
use App\Http\Controllers\SetController;
use Illuminate\Support\Facades\Route;


Route::get('/sets',[SetController::class, 'index']);
Route::get('/set/{id}',[SetController::class, 'show']);
Route::post('/setStore',[TipsController::class, 'store']);
Route::delete('/setDelete',[TipsController::class, 'delete']);
Route::put('/setUpdate/{id}',[TipsController::class, 'update']);