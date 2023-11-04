<?php

namespace App\Http\Controllers;

use App\Models\pedidoPersonalizado;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\User;

class WhatsappController extends Controller
{

    /**
     * Se encarga de armar un array con la informacion necesaria para el envio de un mensaje
     */
    public function mensajeBase($idPedido)
    {
        $pedido = pedidoPersonalizado::find($idPedido);
        $usuario = User::find($pedido->id_usuario);
        $numero = '54' . $usuario->num_telefono;

        $token = env('WHATSAPP_TOKEN');
        $phoneId = env('WHATSAPP_PHONEID');
        $version = 'v17.0';
        $payload = [
            "messaging_product" => "whatsapp",
            "to" => $numero,
            "type" => "template",
            "template" => [
                "name" => "",
                "language" => [
                    "code" => "es_AR"
                ]
            ]
        ];

        $info = ['token' => $token, 'phoneId' => $phoneId, 'version' => $version, 'payload' => $payload];

        return $info;
    }

    public function enviarMensaje($idPedido, $estado)
    {
        if ($estado == 1) {
            $template_name = 'cotizacion_recibida';
        } else {
            $template_name = "pedido_terminado";
        }

        $mensajeBase = $this->mensajeBase($idPedido);
        $mensajeBase['payload']['template']['name'] = $template_name;

        $respuesta = Http::withToken($mensajeBase['token'])->withOptions([
            'verify' => resource_path('certificates/cacert.pem')
        ])->post('https://graph.facebook.com/' . $mensajeBase['version'] . '/' . $mensajeBase['phoneId'] . '/messages', $mensajeBase['payload'])->json();
        return response()->json($respuesta);
    }
}
