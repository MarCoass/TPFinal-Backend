<?php

namespace App\Http\Controllers;

use App\Models\categoriaInsumo;
use App\Models\insumo;
use Illuminate\Http\Request;

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
        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
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
        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
    }

    public function delete($id)
    {
        $insumo = insumo::find($id);
        $insumo->delete();
        return response()->json(['message' => 'Eliminado exitosamente'], 200);
    }

    public function show($id)
    {
        $insumo = insumo::find($id);
        return response()->json($insumo);
    }
}
