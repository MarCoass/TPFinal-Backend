<?php

namespace App\Http\Controllers;

use App\Models\insumoProducto;
use Illuminate\Http\Request;

class InsumoProductoController extends Controller
{
    public function store($id_producto, $id_insumo, $cantidad)
    {
        $insumoProducto = new insumoProducto();
        $insumoProducto->Producto()->associate($id_producto);
        $insumoProducto->Insumo()->associate($id_insumo);
        $insumoProducto->cantidad = $cantidad;
        $insumoProducto->save();
    }

    public function buscarPorProducto($id){
        $insumoProductos = insumoProducto::where('id_producto', $id)->get();
        return response()->json($insumoProductos);
    }

    public function actualizarCantidad(Request $request){
        $id_insumo = $request->input('id_insumo');
        $id_prodducto = $request->input('id_producto');
        $insumoProducto = insumoProducto::where('id_insumo', $id_insumo)->where('id_producto', $id_prodducto)->first();
        $insumoProducto->cantidad = $request->input('cantidad');
        $insumoProducto->save();
        return response()->json(['message' => 'Producto actualizado exitosamente'], 200);
    }
}
