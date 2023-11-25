<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //index
    public function index(){
        $proveedores = proveedor::orderBy('nombre')->get();
        return response()->json($proveedores);
    }

    //show
    public function show($id){
        $proveedor = proveedor::find($id);
        return response()->json($proveedor);
    }

    //store
    public function store(Request $request){
        $proveedor = new proveedor();
        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->anotacion = $request->input('anotacion');
        $proveedor->save();
        return response()->json(['Proveedor agregado correctamente', 200]);
    }

    //update
    public function update(Request $request, $id){
        $proveedor = proveedor::find($id);
        $proveedor->nombre = $request->input('nombre');
        $proveedor->direccion = $request->input('direccion');
        $proveedor->anotacion = $request->input('anotacion');
        $proveedor->save();
        return response()->json(['exito' => true, 'message' => 'Proveedor modificado correctamente.']);
    }

    //delete
    public function delete($id){
        $proveedor = proveedor::find($id);
        $proveedor->delete();
        return response()->json(['exito' => true, 'message' => 'Proveedor eliminado correctamente.']);
    }

}
