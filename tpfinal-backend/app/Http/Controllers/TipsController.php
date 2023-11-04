<?php

namespace App\Http\Controllers;

use App\Models\insumo;
use App\Models\insumoProducto;
use App\Models\Set;
use App\Models\tip;
use Illuminate\Http\Request;

class TipsController extends Controller
{
    //
    public function index()
    {
        $tips = tip::all();
        return response()->json($tips);
    }

    public function store(Request $request)
    {
        $tip = new tip();
        $tip->largo = $request->input('largo');
        $tip->forma = $request->input('forma');

        // Relaciona el tip con un insumo
        $insumo = insumo::find($request->input('id_insumo')); // Asume que tienes un campo insumo_id en tu formulario
        $tip->insumo()->associate($insumo);

        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
    }

    public function update(Request $request)
    {
        $tip = tip::find($request->input('id'));
        $tip->largo = $request->input('largo');
        $tip->forma = $request->input('forma');

        // Relaciona el tip con un insumo
        $insumo = insumo::find($request->input('id_insumo')); // Asume que tienes un campo insumo_id en tu formulario
        $tip->insumo()->associate($insumo);

        return response()->json(['message' => 'Datos actualizados exitosamente'], 200);
    }

    public function delete($id_insumo)
    {
        $tip = tip::where('id_insumo', $id_insumo)->first();
        $idTip = $tip->id;
        //revisar si se utiliza en algun set
        $insumoProducto = insumoProducto::where('id_insumo', $id_insumo)->exists();
        $set = Set::where('id_tips', $idTip)->exists();
        if ($insumoProducto || $set) {
            return false;
        } else {
            $tip->delete();
            return true;
        }
    }

    public function show($id)
    {
        $tip = tip::find($id);
        return response()->json($tip);
    }
}
