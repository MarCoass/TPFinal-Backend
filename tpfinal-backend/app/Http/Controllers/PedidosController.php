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
    public function store(Request $request)
    {

        $pedido = new pedidoPersonalizado();
        $set = new SetController();
        $setResponse = $set->store($request);

        //obtengo el ID desde el response
        $data = json_decode($setResponse->getContent());
        $id_producto = $data->id_producto;
        $pedido->id_producto = $id_producto;
        $pedido->id_usuario = $request->input('id_user');

        $pedido->save();
        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
    }

    //update

    //delete
    public function delete($id)
    {
        $pedido = pedidoPersonalizado::find($id);
        $pedido->delete();
        return response()->json(['exito' => true, 'message' => 'Pedido eliminado correctamente.']);
    }

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
        if ($request->input('estado') == 1 || $request->input('estado') == 5) {
            $mensaje = new WhatsappController();
            /*   $respuestaMensaje = $mensaje->enviarMensaje($id, $request->input('estado')); */
            $respuestaMensaje = 'No mando el mensaje para no sumar mas dolares';
        }
        return response()->json(['exito' => true, 'message' => 'Estado actualizado correctamente.']);
    }


    public function pedidosUsuario($id)
    {
        $pedidos = pedidoPersonalizado::with('producto')->where('id_usuario', $id)->get();
        return response()->json($pedidos);
    }
}
