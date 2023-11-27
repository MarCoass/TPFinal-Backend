<?php

namespace App\Http\Controllers;

use App\Models\insumoProducto;
use App\Models\precioProveedor;
use Illuminate\Http\Request;

class PrecioProveedoresController extends Controller
{
    //store
    public function store(Request $request){
        $precio = new precioProveedor();
        $precio->id_insumo = $request->input('id_insumo');
        $precio->id_proveedor = $request->input('id_proveedor');
        $precio->precio = $request->input('precio');
        $precio->save();
        return response()->json(['Precio agregado correctamente', 200]);
    }


    //update
    public function update(Request $request, $id){
        
        $precio = precioProveedor::find($id);
        $precio->precio = $request->input('precio');
        $precio->save();
        return response()->json(['Precio modificado correctamente', 200]);
    }

    //delete
    public function delete($id){
        $precio = precioProveedor::find($id);
        $precio->delete();
        return response()->json(['exito' => true, 'message'=>'Precio eliminado correctamente', 200]);
    }

    //show
    public function show($id){
        $precio = precioProveedor::find($id);
        return response()->json($precio);
    }
}
