<?php

namespace App\Http\Controllers;
use App\Models\categoriaSet;
use Illuminate\Http\Request;

class CategoriasSetController extends Controller
{
    public function index()
    {
        $categorias = categoriaSet::all();
        return response()->json($categorias);
    }

    public function show($id){
        $categoria = categoriaSet::find($id);
        return response()->json($categoria);
    }
}
