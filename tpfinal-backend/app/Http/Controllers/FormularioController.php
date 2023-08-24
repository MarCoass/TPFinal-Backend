<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function index()
    {
        $response = session('response');
        if ($response) {
            return view('formulario', compact('response'));
        }

        return view('formulario');
    }

    public function enviar(Request $request)
    {
        $telefonos = $request->input('telefonos');
        $array = explode(",", $telefonos);
        
        $data = $request->validate([
            'id_setsFavoritos' => 'required|array', // Asegúrate de que sea un array
            'id_setsFavoritos.*' => 'integer' // Asegúrate de que cada elemento sea un entero
        ]);

        $response = [
            'success' => 'Formulario enviado correctamente',
            'telefonos' => $array
        ];
     
        return redirect('/formulario')->with('response', $response);
    }
}
