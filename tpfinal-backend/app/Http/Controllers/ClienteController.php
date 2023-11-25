<?php

namespace App\Http\Controllers;

use App\Models\pedidoPersonalizado;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = User::where('id_rol', 2)->orderBy('nombre')->get();
        return response()->json($clientes);
    }

    public function show($id)
    {
        $cliente = User::find($id);
        return response()->json($cliente);
    }

    public function comentar(Request $request, $id)
    {
        $cliente = User::find($id);
        $cliente->observacion = $request->input('observacion');
        $cliente->save();
        return response()->json(['exito' => true, 'message' => 'Comentario modificado exitosamente', 200]);
    }

    public function pedidos($id)
    {
        $pedidos = pedidoPersonalizado::with('producto', 'usuario')->where('id_usuario', $id)->orderBy('estado')->get();
        return response()->json($pedidos);
    }

    public function editarPerfil(Request $request, $id)
    {
        
        $user = User::find($id);
        $user->username = $request->input('username');
        $user->nombre = $request->input('nombre');
        $user->apellido = $request->input('apellido');
        $user->num_telefono = $request->input('num_telefono');
        $user->email = $request->input('email');
        $user->save();
        return response()->json(['exito' => true, 'message' => 'Estado actualizado correctamente.']);
    }
}
