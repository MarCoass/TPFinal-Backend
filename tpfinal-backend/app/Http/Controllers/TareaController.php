<?php

namespace App\Http\Controllers;
use App\Models\tarea;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    //index
    public function index(){
        $tareas = Tarea::all();
        return response()->json($tareas);
    }

    //create
    public function create(Request $request){
        $tarea = new Tarea();
        $tarea->titulo = $request->input('titulo');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->estado = 0;
        $tarea->fecha_vencimiento = $request->input('fecha_vencimiento');
        $tarea->save();
        return response()->json(['Tarea creada correctamete', 200]);
    }

    //delete
    public function delete($id){
        $tarea = Tarea::find($id);
        $tarea->destroy();
        return response()->json(['Tarea eliminada correctamente', 200]);
    }

    //update

    //show
    
}
