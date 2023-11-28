<?php

namespace App\Http\Controllers;
use App\Models\CategoriaSet;
use Illuminate\Http\Request;
use App\Models\Set;

class CategoriaSetController extends Controller
{
    public function index()
    {
        $categorias = CategoriaSet::orderBy('id')->get();
        return response()->json($categorias);
    }

    public function show($id){
        $categoria = categoriaSet::find($id);
        return response()->json($categoria);
    }

    public function update(Request $request, $id)
    {
        $categoria = CategoriaSet::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->precio_base = $request->input('precio_base');
        $categoria->save();
        return response()->json(['exito' => true, 'message' => 'Categoria actualizada exitosamente'], 200);
    }

    public function store(Request $request)
    {
        $categoria = new CategoriaSet;
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->precio_base = $request->input('precio_base');
        $categoria->save();
        return response()->json(['exito' => true, 'message' => 'Categoria actualizada exitosamente'], 200);
    }

    public function delete($id)
    {
        $categoria = CategoriaSet::find($id);

        //reviso si se usa
        $enUso = set::where('id_categoria', $id)->exists();
        if ($enUso) {
            return response()->json(['message' => 'No se puede eliminar, existe un set que utiliza esta categoria.', 'exito' => false], 200);
        } else {
            $categoria->delete();
            return response()->json(['exito' => true, 'message' => 'Categoria eliminada exitosamente'], 200);
        }
    }
}
