<?php

namespace App\Http\Controllers;

use App\Models\pedidoPersonalizado;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;

class WhatsappController extends Controller
{
    //
    public function ejemplo()
    {
        $token = 'EAAbJ3wTRTZA8BOZC22mvkYnaFqXIXe9cjSXMWjDbloR9LhM1pQj6719eGmloq8aw3I1mI4b3hkkyiPyibOi6mWmjiBHZC95me4lWsLXvFGYeOrGHS9TtnE7ElnhhOMojXxtplvUJaQsgByfjsmGF8fFYZCq5FTrAMYNJFSD0R8hespRWxzpZAK5aDSWAx90jCmi1x7jZAAPGbwmSFy';
        $phoneId = '151738844691434';
        $version = 'v17.0';
        $payload = [
            "messaging_product" => "whatsapp",
            "to" => "542994677550",
            "type" => "template",
            "template" => [
                "name" => "prueba",
                "language" => [
                    "code" => "es_AR"
                ]
            ]
        ];
        

        $respuesta = Http::withToken($token)->withOptions([
            'verify' => resource_path('certificates/cacert.pem')
        ])->post('https://graph.facebook.com/' . $version . '/' . $phoneId . '/messages', $payload)->json();

        return response()->json($respuesta);
    }

    public function notificarPedidoTerminado($idPedido){
        $pedido = pedidoPersonalizado::find($idPedido);
        $usuario = User::find($pedido->id_usuario);
        $numero = '54' . $usuario->num_telefono;

        $token = 'EAAbJ3wTRTZA8BOZC22mvkYnaFqXIXe9cjSXMWjDbloR9LhM1pQj6719eGmloq8aw3I1mI4b3hkkyiPyibOi6mWmjiBHZC95me4lWsLXvFGYeOrGHS9TtnE7ElnhhOMojXxtplvUJaQsgByfjsmGF8fFYZCq5FTrAMYNJFSD0R8hespRWxzpZAK5aDSWAx90jCmi1x7jZAAPGbwmSFy';
        $phoneId = '151738844691434';
        $version = 'v17.0';
        $payload = [
            "messaging_product" => "whatsapp",
            "to" => $numero,
            "type" => "template",
            "template" => [
                "name" => "pedido_terminado",
                "language" => [
                    "code" => "es_AR"
                ]
            ]
        ];
        $respuesta = Http::withToken($token)->withOptions([
            'verify' => resource_path('certificates/cacert.pem')
        ])->post('https://graph.facebook.com/' . $version . '/' . $phoneId . '/messages', $payload)->json();

        return response()->json($respuesta);
    }
}
