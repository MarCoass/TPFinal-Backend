<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FormularioController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ejemplo', [Controller::class, 'ejemplo']);
Route::get('/formulario', [FormularioController::class, 'index']);
Route::post('/formulario/enviar', [UserController::class, 'registro'])->name('registro');