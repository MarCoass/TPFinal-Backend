<?php

namespace App\Http\Controllers;

use App\Models\categoriaInsumo;
use App\Models\esmalte;
use App\Models\insumo;
use App\Models\tip;
use Illuminate\Http\Request;
use App\Http\Controllers\TipsController;
use App\Models\insumoProducto;

class InsumosController extends Controller
{

    public function index()
    {
        $insumos = insumo::with('preciosProveedores.proveedor')->get();
        return response()->json($insumos);
    }

    public function store(Request $request)
    {

        $insumo = new insumo();
        $insumo->nombre = $request->input('nombre');
        $insumo->descripcion = $request->input('descripcion');
        $insumo->marca = $request->input('marca');
        $insumo->stock = $request->input('stock');
        $insumo->estado = $request->input('estado');
        $insumo->stock_minimo = $request->input('stock_minimo');

        //para guardar la categoria
        $categoria = categoriaInsumo::find($request->input('id_categoria'));

        $insumo->CategoriaInsumo()->associate($categoria);

        $insumo->save();
        return response()->json(['exito' => true, 'message' => 'Datos guardados exitosamente'], 200);
    }

    public function update(Request $request, $id)
    {
        $insumo = insumo::find($id);
        $insumo->nombre = $request->input('nombre');
        $insumo->descripcion = $request->input('descripcion');
        $insumo->marca = $request->input('marca');
        $insumo->stock = $request->input('stock');
        $insumo->estado = $request->input('estado');
        $insumo->stock_minimo = $request->input('stock_minimo');

        //para guardar la categoria
        $categoria = categoriaInsumo::find($request->input('id_categoria'));
        $insumo->CategoriaInsumo()->associate($categoria);

        $insumo->save();
        return response()->json(['exito' => true, 'message' => 'Datos guardados exitosamente'], 200);
    }

    public function delete($id)
    {
        $insumo = insumo::find($id);
        //esto esta feo, modificar

        //reviso si se usa en un insumoProducto
        $existeInsumoProducto = insumoProducto::where('id_insumo', $id)->exists();
        if ($existeInsumoProducto) {
            return response()->json(['message' => 'No se puede eliminar, existe un producto que utiliza este insumo.', 'exito' => false], 200);
        } else {
            //reviso si existe un tip con este id 
            $existeTip = tip::where('id_insumo', $id)->exists();
            if ($existeTip) {
                $tip = new TipsController();
                $tipEliminado = $tip->delete($id);
                if (!$tipEliminado) {
                    return response()->json(['message' => 'No se puede eliminar, existe un tip asociado a este insumo.',  'exito' => false], 200);
                }
            }
        }

        $esmalte = esmalte::where('id_insumo', $id)->delete();
        $insumo->delete();
        return response()->json(['message' => 'Eliminado exitosamente',  'exito' => true], 200);
    }

    public function show($id)
    {
        $insumo = insumo::with('preciosProveedores.proveedor')->find($id);
        return response()->json($insumo);
    }

    public function stockUpdate(Request $request, $id)
    {
        $insumo = insumo::find($id);
        $insumo->stock = $request->input('stock');
        $insumo->save();
        return response()->json(['exito' => true, 'message' => 'Stock modificado exitosamente', 200]);
    }
}
