<?php

namespace App\Http\Controllers;

use App\Models\insumo;
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

    public function buscarPorProducto($id)
    {
        $insumoProductos = insumoProducto::where('id_producto', $id)->get();
        return response()->json($insumoProductos);
    }

    public function actualizarCantidad(Request $request)
    {
        $id_insumo = $request->input('id_insumo');
        $id_producto = $request->input('id_producto');
        $insumoProducto = insumoProducto::where('id_insumo', $id_insumo)->where('id_producto', $id_producto)->first();
        $insumoProducto->cantidad = $request->input('cantidad');
        $insumoProducto->save();
        return response()->json(['message' => 'Producto actualizado exitosamente'], 200);
    }

    public function modificarStockPorProductos($cantidadProducto, $id_producto)
    {
        $insumoProductos = insumoProducto::where('id_producto', $id_producto)->get();
        foreach ($insumoProductos as $insumoProducto) {
            $cantidadNecesaria = $insumoProducto->cantidad * $cantidadProducto;
            $insumo = insumo::find($insumoProducto->id_insumo);
            $insumo->stock = $insumo->stock - $cantidadNecesaria;
            $insumo->save();
        }
        return response()->json('Exito descontando stock');
    }
}
