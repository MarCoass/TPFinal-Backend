<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //esta funcion puede ser de edicion de datos de perfil y validar username, nombre, apellido y telefono
    public function registro(Request $request)
    {
        //validar los datos del formulario
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|string|min:8',
        ]);

        //crear un nuevo usario en la bd
        $user = new User([
            'username' => $request->input('username'),
            'nombre' => $request->input('nombre'),
            'apellido'=> $request->input('apellido'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'num_telefono' => $request->input('num_telefono'),
            'id_rol' => 2

        ]);
        

        $user->save();

        return response()->json(['message' => 'Usuario registrado exitosamente']);
    }
}
