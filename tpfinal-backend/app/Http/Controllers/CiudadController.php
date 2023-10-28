<?php

namespace App\Http\Controllers;
use App\Models\Ciudad;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    //
    public function index()
    {
        $ciudades = Ciudad::all();
        return response()->json($ciudades);
    }

    public function show($id){
        $ciudad = Ciudad::find($id);
        return response()->json($ciudad);
    }
}
