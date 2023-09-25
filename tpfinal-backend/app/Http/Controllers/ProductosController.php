<?php

namespace App\Http\Controllers;

use App\Models\Ciudad;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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


        if ($request->hasFile('imagen')) {
            $extension = $request->file('imagen')->getClientOriginalExtension(); //obtengo el tipo de extensión
            $nombreSinEspacios = str_replace(' ', '', $request->input('nombre')); //saco los espacios para evitar problemas
            $nombreImagen = $nombreSinEspacios . '.' . $extension; //armo el nuevo nombre del archivo agregándole la extensión
            $path = $request->file('imagen')->storeAs('/productos', $nombreImagen, 'public'); //subo a /productos la imagen
            $producto->url_imagen = $path; //guardo en la base de datos la URL de la imagen 
        }

        //para guardar la ciudad
        $ciudad = Ciudad::find($request->input('ciudad'));
        $producto->Ciudad()->associate($ciudad);

        $producto->save();
        return response()->json(['message' => 'Datos guardados exitosamente'], 200);
    }


    public function update(Request $request, $id)
    {
        
        // Busca el producto por su ID
        $producto = producto::find($id);

        if (!$producto) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        // Actualiza los campos del producto con los datos del request
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->stock = $request->input('stock');
        $producto->estado = $request->input('estado');

        // Actualiza la imagen si se proporciona en el request
        if ($request->hasFile('imagen')) {
            $extension = $request->file('imagen')->getClientOriginalExtension();
            $nombreSinEspacios = str_replace(' ', '', $request->input('nombre'));
            $nombreImagen = $nombreSinEspacios . '.' . $extension;
            $path = $request->file('imagen')->storeAs('/productos', $nombreImagen, 'public');
            $producto->url_imagen = $path;
        }

        // Actualiza la ciudad asociada al producto si se proporciona en el request
        if ($request->has('ciudad')) {
            $ciudad = Ciudad::find($request->input('ciudad'));
            $producto->Ciudad()->associate($ciudad);
        }

        $producto->save();

        return response()->json(['message' => 'Producto actualizado exitosamente'], 200);
    }


    public function show($id)
    {
        $producto = producto::find($id);
        return response()->json($producto);
    }

    public function delete($id)
    {
        $producto = producto::find($id);
        $producto->delete();
        return response()->json(['message' => 'Eliminado exitosamente'], 200);
    }
}
