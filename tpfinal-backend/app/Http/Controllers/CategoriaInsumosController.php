<?php

namespace App\Http\Controllers;

use App\Models\categoriaInsumo;
use Illuminate\Http\Request;

class CategoriaInsumosController extends Controller
{

    public function index()
    {
        $categorias = categoriaInsumo::all();
        return response()->json($categorias);
    }

    public function show($id)
    {
        $categoria = categoriaInsumo::find($id);
        return response()->json($categoria);
    }

    public function update(Request $request, $id)
    {
        $categoria = categoriaInsumo::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        return response()->json(['exito' => true, 'message' => 'Producto actualizado exitosamente'], 200);
    }
}
