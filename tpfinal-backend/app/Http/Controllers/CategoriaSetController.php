<?php

namespace App\Http\Controllers;
use App\Models\CategoriaSet;
use Illuminate\Http\Request;

class CategoriaSetController extends Controller
{
    public function index()
    {
        $categorias = CategoriaSet::all();
        return response()->json($categorias);
    }
}
