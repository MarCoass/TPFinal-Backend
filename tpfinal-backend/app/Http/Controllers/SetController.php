<?php

namespace App\Http\Controllers;

use App\Models\CategoriaSet;
use App\Models\producto;
use App\Models\Set;
use App\Models\tip;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductosController;
use App\Models\pedidoPersonalizado;
use App\Models\User;

class SetController extends Controller
{
    //
    public function index()
    {
        $sets = Set::all();
        return response()->json($sets);
    }

    public function store(Request $request)
    { 
        //crear el producto
        $productoController = new ProductosController();
        $productoResponse = $productoController->store($request);

        //obtengo el ID desde el response
        $productoData = json_decode($productoResponse->getContent());
        $id_producto = $productoData->id;

        //crea el set
        $set = new Set();

        $producto = producto::find($id_producto);
        $set->Producto()->associate($producto);

        if ($request->input('id_categoria') != null) {
            $categoria = CategoriaSet::find($request->input('id_categoria'));
            $set->CategoriaSet()->associate($categoria);
        } else {
            $categoria = CategoriaSet::find(4);
            $set->CategoriaSet()->associate($categoria);
        }

        if ($request->input('id_user') != null) {
            //cambio el nombre del producto
            $pedidos = pedidoPersonalizado::with('producto')->where('id_usuario', $request->input('id_user'))->count();
            $user = User::find($request->input('id_user'));
            $producto->nombre = 'Pedido personalizado ' . $user->nombre . ' #' . $pedidos+1;
            $producto->save();
        }


        $tips = tip::find($request->input('id_tip'));
        $set->Tip()->associate($tips);

        $set->save();
        if ($request->input('id_categoria') != null) {
            return response()->json(['message' => 'Datos guardados exitosamente'], 200);
        } else {
            return response()->json(['id_producto' => $producto->id]);
        }
    }

    public function update(Request $request, $id)
    {

        //busco el set
        $set = Set::find($id);

        if (!$set) {
            return response()->json(['message' => 'Set no encontrado']);
        }

        //actualizar los campos del set
        $categoria = CategoriaSet::find($request->input('id_categoria'));
        $set->Categoria()->associate($categoria);

        $tips = tip::find($request->input('id_tips'));
        $set->Tips()->associate($tips);

        //actualizar campos del producto
        $productoController = new ProductosController();
        $id_producto = $set->Producto();
        $productoResponse = $productoController->update($request, $id_producto);

        $set->save();
        return response()->json(['message' => 'Set actualizado correctamente', 200]);
    }

    public function show($id)
    {
        $set = Set::find($id);
        return response()->json($set);
    }

    public function delete($id)
    {
        $set = Set::find($id);
        $id_producto = $set->producto->id; // Accede al producto y obtén su ID.

        $set->delete();
        $productoController = new ProductosController();
        $productoResponse = $productoController->delete($id_producto);
        return response()->json(['message' => 'Set eliminado correctamente'], 200);
    }


    public function esSet($id)
    {

        $set = Set::find($id);
        $esSet = $set ? true : false;
        return response()->json(['esSet' => $esSet]);
    }
}
