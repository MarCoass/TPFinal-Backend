<?php

namespace App\Http\Controllers;
use App\Models\tarea;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TareaController extends Controller
{
    //index
    public function index(){
        $tareas = Tarea::orderBy('estado', 'asc')->orderBy('created_at', 'desc')->get();
        return response()->json($tareas);
    }

    //create
    public function store(Request $request){
        
        $tarea = new Tarea();
        $tarea->titulo = $request->input('titulo');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->estado = $request->input('estado');
        $tarea->fecha_vencimiento = Carbon::parse($request->input('fecha_vencimiento'));
        $tarea->save();
        return response()->json(['Tarea creada correctamete', 200]);
    }

    //delete
    public function delete($id){
        
        $tarea = Tarea::find($id);
       
        $tarea->delete();
        return response()->json(['Tarea eliminada correctamente', 200]);
    }

    //update
    public function update(Request $request, $id){
      
        $tarea = Tarea::find($id);
        $tarea->titulo = $request->input('titulo');
        $tarea->descripcion = $request->input('descripcion');
        $tarea->estado = 0;
        $tarea->fecha_vencimiento = Carbon::parse($request->input('fecha_vencimiento'));
        $tarea->save();
        return response()->json(['Tarea modificada correctamete', 200]);
    }

    //show
    public function show($id){
        $tarea = Tarea::find($id);
        return response()->json($tarea);
    }

    //cambiar estado
    public function cambiarEstado($id){
        $tarea = Tarea::find($id);
        $tarea->estado = 1;
        $tarea->save();
        return response()->json(['Estado modificado correctamete', 200]);
    }

    //para mostrar en el inicio
    public function mostrarInicio(){
        $tareas = Tarea::where('estado', 0)->orderBy('created_at', 'desc')->take(5)->get();
        $cantPendientes = Tarea::where('estado', 0)->count();
        return response()->json(['tareas'=>$tareas , 'cantidadPendientes'=>$cantPendientes]);
    }

}
