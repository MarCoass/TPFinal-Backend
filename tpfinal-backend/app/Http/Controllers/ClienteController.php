<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $clientes = User::all();
        return response()->json($clientes);
    }

    public function show($id){
        $cliente = User::find($id);
        return response()->json($cliente);
    }
}
