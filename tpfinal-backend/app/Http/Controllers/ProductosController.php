<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\producto;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index()
    {
        $productos = producto::all();
        return response()->json($productos);
    }

    public function store(Request $request)
    {
        $producto = new producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->estado = $request->input('estado');

        //para guardar la imagen
        if ($request->hasFile('imagen')) {
            $extension = $request->file('imagen')->getClientOriginalExtension(); //obtengo el tipo de extension
            $nombreSinEspacios = str_replace(' ', '', $request->input('nombre')); //saco los espacios para evitar problemas
            $nombreImagen = $nombreSinEspacios . '.' . $extension; //armo el nuevo nombre del archivo agregandole la extension
            $path = $request->file('flyer')->storeAs('/productos', $nombreImagen, 'public'); //subo a /productos la imagen
            $producto->url_imagen = $path; //guardo en la bd la url a la imagen
        }

        //para guardar la ciudad
        $ciudad = Ciudad::find($request->input('id_ciudad'));
        $producto->id_ciudad()->associate($ciudad);

        $producto->save();
    }

    public function update(Request $request)
    {
    }

    public function show($idProducto)
    {
    }

    public function delete($idProducto)
    {
    }
}
