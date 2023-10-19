<?php

namespace App\Http\Controllers;

use App\Models\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //index
    public function index(){
        $proveedores = proveedor::all();
        return response()->json($proveedores);
    }

    //show
    public function show($id){
        $proveedor = proveedor::find($id);
        return response()->json($proveedor);
    }

    //store

    //update

    //delete

}
