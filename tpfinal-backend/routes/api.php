<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/send-test-email', function (Request $request) {
    $to = 'test@example.com';
    $subject = 'Test Email';
    $message = 'This is a test email from Laravel!';

    Mail::raw($message, function ($mail) use ($to, $subject) {
        $mail->to($to)->subject($subject);
    });

    return 'Test email sent successfully!';
});

require __DIR__.'/auth.php';
// require __DIR__ . '/auth.php';
require __DIR__ . '/insumos.php';
require __DIR__ . '/ciudades.php';
require __DIR__ . '/sets.php';
require __DIR__ . '/productos.php';
require __DIR__ . '/tareas.php';
require __DIR__ . '/proveedores.php';
require __DIR__ . '/categorias.php';
require __DIR__ . '/pedidos.php';
require __DIR__ . '/cliente.php';
require __DIR__ . '/carrito.php';
require __DIR__ . '/favoritos.php';
