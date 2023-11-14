<?php

namespace App\Http\Controllers;

use App\Models\parametros;
use Illuminate\Http\Request;

class ParametrosController extends Controller
{
    public function index()
    {
        $params = parametros::all();
        return response()->json($params);
    }

    public function update(Request $request)
    {
        $parametrosArray = $request->all();

        /* $parametro = parametros::where('nombre', 'instagram_url')->first();
        $parametro->valor = $parametrosArray['instagram_url'];
        $parametro->save(); */

        foreach ($parametrosArray as $paramName => $paramValue) {
            // Encuentra el registro en la tabla 'parametros' donde 'nombre' coincide con $paramName
            $parametro = parametros::where('nombre', $paramName)->first();

            if ($parametro) {
                // Actualiza el valor de 'valor' con el nuevo valor
                $parametro->valor = $paramValue;
                $parametro->save();
            }
        }

        return response()->json(['exito' => true]);
    }
}
