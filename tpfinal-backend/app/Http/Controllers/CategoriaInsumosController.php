<?php

namespace App\Http\Controllers;

use App\Models\categoriaInsumo;
use App\Models\insumo;
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
        return response()->json(['exito' => true, 'message' => 'Categoria actualizada exitosamente'], 200);
    }

    public function store(Request $request)
    {
        $categoria = new categoriaInsumo;
        $categoria->nombre = $request->input('nombre');
        $categoria->save();
        return response()->json(['exito' => true, 'message' => 'Categoria actualizada exitosamente'], 200);
    }

    public function delete($id)
    {
        $categoria = categoriaInsumo::find($id);

        //reviso si se usa
        $enUso = insumo::where('id_categoria', $id)->exists();
        if ($enUso) {
            return response()->json(['message' => 'No se puede eliminar, existe un insumo que utiliza esta categoria.', 'exito' => false], 200);
        } else {
            $categoria->delete();
            return response()->json(['exito' => true, 'message' => 'Categoria eliminada exitosamente'], 200);
        }
    }
}
