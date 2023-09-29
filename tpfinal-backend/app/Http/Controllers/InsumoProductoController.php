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
}
