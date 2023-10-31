<?php

namespace App\Http\Controllers;

use App\Models\pedidoPersonalizado;
use Illuminate\Http\Request;

class PedidosController extends Controller
{
    //index
    public function index(){
        $pedidos = pedidoPersonalizado::with('producto', 'usuario')->get();
        return response()->json($pedidos);
    }

    //show
    public function show($id){
        $pedido = pedidoPersonalizado::find($id);
        return response()->json($pedido);
    }

    //store

    //update

    //delete

    //cambiar estado
    public function cambiarEstado(Request $request, $id){
        $pedido = pedidoPersonalizado::find($id);
        $pedido->estado = $request->input('estado');
        $pedido->save();
        if($request->input('estado')==5){
            $mensaje = new WhatsappController();
            $respuestaMensaje = $mensaje->notificarPedidoTerminado($id);
            return response()->json(['exito'=>true, 'message'=>'Estado actualizado correctamente.', 'mensaje' => $respuestaMensaje]);
        }
        return response()->json(['exito'=>true, 'message'=>'Estado actualizado correctamente.']);
    }
}
