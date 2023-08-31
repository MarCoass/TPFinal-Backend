<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use Illuminate\Http\Request;

class Prueba extends Controller
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


    //para guardar un array en la bd es asi
    public function pruebaArray()
    {
        $carrito = new carrito();
        $carrito->idUsuario = 1;
        $carrito->idSets = [1,2,3];
        $carrito->idKits = [1,2,3];
        $carrito->save();
    }
}
