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
}
