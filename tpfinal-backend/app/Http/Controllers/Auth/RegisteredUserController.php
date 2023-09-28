<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Rol;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): Response
    {
        $request->validate([
            'username' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'username' => $request->username,
            'nombre' => $request->input('nombre'),
            'apellido' => $request->input('apellido'),
            'num_telefono' => $request->input('numTelefono'),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'id_rol' => 2
        ]);

        // Relaciona el usuario con el rol
     
        $user->idRol()->associate(2);


        event(new Registered($user));

        Auth::login($user);


        return response()->noContent();
    }
}
