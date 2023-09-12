<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = producto::all();
        return response()->json($productos);
    }

    public function store(Request $request)
    {
    }

    public function update(Request $request)
    {
    }

    public function show($idProducto)
    {
    }

    public function delete($idProducto)
    {
    }
}
