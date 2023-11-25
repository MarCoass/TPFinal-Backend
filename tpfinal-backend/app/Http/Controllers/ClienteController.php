<?php

namespace App\Http\Controllers;

use App\Models\pedidoPersonalizado;
use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = User::where('id_rol', 2) ->orderBy('nombre')->get();
        return response()->json($clientes);
    }

    public function show($id){
        $cliente = User::find($id);
        return response()->json($cliente);
    }

    public function comentar(Request $request, $id){
        $cliente = User::find($id);
        $cliente->observacion = $request->input('observacion');
        $cliente->save();
        return response()->json(['exito' => true, 'message' => 'Comentario modificado exitosamente', 200]);
    }

    public function pedidos($id){
        $pedidos = pedidoPersonalizado::with('producto', 'usuario')->where('id_usuario', $id)->orderBy('estado')->get();
        return response()->json($pedidos);
    }

}
