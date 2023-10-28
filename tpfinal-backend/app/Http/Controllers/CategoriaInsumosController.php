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
}