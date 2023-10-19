<?php

use App\Http\Controllers\ProveedorController;
use App\Models\proveedor;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['rol:1']], function () {

    Route::get(['/proveedores', [ProveedorController::class, 'index']]);
    Route::get(['/proveedor/{id}', [ProveedorController::class, 'show']]);
    Route::post(['/proveedorStore', [ProveedorController::class, 'store']]);
    Route::post(['/proveedorUpdate/{id}', [ProveedorController::class, 'update']]);
    Route::post(['/proveedorDelete/{id}', [ProveedorController::class, 'delete']]);
});


