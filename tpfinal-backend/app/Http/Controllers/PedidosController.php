<?php

namespace App\Http\Controllers;

use App\Models\pedidoPersonalizado;
use App\Models\producto;
use Illuminate\Http\Request;
use Mockery\Undefined;

class PedidosController extends Controller
{
    //index
    public function index()
    {
        $pedidos = pedidoPersonalizado::with('producto', 'usuario')->get();
        return response()->json($pedidos);
    }

    //show
    public function show($id)
    {
        $pedido = pedidoPersonalizado::find($id);
        return response()->json($pedido);
    }

    //store

    //update

    //delete

    //cambiar estado
    public function cambiarEstado(Request $request, $id)
    {
        $pedido = pedidoPersonalizado::find($id);
        $pedido->estado = $request->input('estado');
        if ($request->input('precio')) {
            //busco el producto
            $producto = producto::find($pedido->id_producto);
            $producto->precio = $request->input('precio');
            $producto->save();
        }
        if ($request->input('fecha_entrega')) {
            $pedido->fecha_entrega = $request->input('fecha_entrega');
        }

        $pedido->save();
        if ($request->input('estado') == 1) {
            //ACA VA EL OTRO TEMPLATE
            /*  $mensaje = new WhatsappController();
            $respuestaMensaje = $mensaje->notificarPedidoTerminado($id);
            return response()->json(['exito'=>true, 'message'=>'Estado actualizado correctamente.', 'mensaje' => $respuestaMensaje]); */
        }
        if ($request->input('estado') == 5) {
            $mensaje = new WhatsappController();
            $respuestaMensaje = $mensaje->notificarPedidoTerminado($id);
            return response()->json(['exito' => true, 'message' => 'Estado actualizado correctamente.', 'mensaje' => $respuestaMensaje]);
        }
        return response()->json(['exito' => true, 'message' => 'Estado actualizado correctamente.']);
    }
}
