<?php

namespace App\Http\Controllers;
use App\Models\Ciudad;
use App\Models\producto;
use Illuminate\Http\Request;

class CiudadController extends Controller
{
    //
    public function index()
    {
        $ciudades = Ciudad::orderBy('id')->get();
        return response()->json($ciudades);
    }

    public function show($id){
        $ciudad = Ciudad::find($id);
        return response()->json($ciudad);
    }

    public function store(Request $request){
        $ciudad = new Ciudad();
        $ciudad->nombre = $request->input('nombre');
        $ciudad->valor_envio = $request->input('valor_envio');
        $ciudad->save();
        return response()->json(['exito' => true, 'message' => 'Ciudad creada exitosamente'], 200);
    }

    public function update(Request $request, $id){
        $ciudad = Ciudad::find($id);
        $ciudad->nombre = $request->input('nombre');
        $ciudad->valor_envio = $request->input('valor_envio');
        $ciudad->save();
        return response()->json(['exito' => true, 'message' => 'Ciudad creada exitosamente'], 200);
    }

    public function delete($id){
        $ciudad = Ciudad::find($id);
        //comprobar que no se este utilizando
        $enUso = producto::where('id_ciudad', $id)->exists();
        if($enUso){
            $message = 'No es posible eliminar la ciudad, esta siendo utilizada.';
        } else {
            $message = 'Ciudad eliminada con exito.';
            $ciudad->delete();
        }
        return response()->json(['exito' => !$enUso, 'message' => $message], 200);
    }
}
