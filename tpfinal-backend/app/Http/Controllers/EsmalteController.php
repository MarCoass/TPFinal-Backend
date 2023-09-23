<?php

namespace App\Http\Controllers;

use App\Models\esmalte;
use App\Models\insumo;
use Illuminate\Http\Request;

class EsmalteController extends Controller
{
    //
    public function index()
    {
        $esmaltes = esmalte::all();
        return response()->json($esmaltes);
    }

    public function store(Request $request)
    {
        $esmalte = new esmalte();
        $esmalte->codigo_color = $request->input('codigo_color');
        $esmalte->usos_maximos = $request->input('usos_maximos');
        $esmalte->usos = $request->input('usos');

        // Relaciona el esmalte con un insumo
        $insumo = insumo::find($request->input('id_insumo')); // Asume que tienes un campo insumo_id en tu formulario
        $esmalte->insumo()->associate($insumo);

        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
    }


    public function update(Request $request)
    {
        $esmalte = esmalte::find($request->input('id'));
        $esmalte->codigo_color = $request->input('codigo_color');
        $esmalte->usos_maximos = $request->input('usos_maximos');
        $esmalte->usos = $request->input('usos');

        // Relaciona el esmalte con un insumo
        $insumo = insumo::find($request->input('id_insumo')); // Asume que tienes un campo insumo_id en tu formulario
        $esmalte->insumo()->associate($insumo);

        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
    }

    public function delete($id)
    {
        $esmalte = insumo::find($id);
        $esmalte->delete();
        return response()->json(['message' => 'Datos eliminados exitosamente'], 200);
    }

    public function show($id)
    {
        $esmalte = esmalte::find($id);
        return response()->json($esmalte);
    }
}
