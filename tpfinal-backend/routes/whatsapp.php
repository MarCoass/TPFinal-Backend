<?php

use App\Http\Controllers\WhatsappController;
use Illuminate\Support\Facades\Route;

Route::get('/mensajePrueba',[WhatsappController::class, 'ejemplo']);
