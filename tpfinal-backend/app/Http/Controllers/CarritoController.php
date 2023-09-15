<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use App\Models\producto;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    //Obtiene el carrito actual del usuario autenticado
    public function verCarritoActual()
    {
        $user = auth()->user();
        //trae el ultimo carrito carrito con estado '0' 
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->get();
        return response()->json($carrito);
    }

    //Obtiene todos los carritos del usuario 
    public function verCarritosUsuario($id_usuario)
    {
        $carritos = carrito::where('id_usuario', $id_usuario);
        return response()->json($carritos);
    }

    public function verCarrito($id_carrito)
    {
        $carrito = carrito::find($id_carrito);
        return response()->json($carrito);
    }

    //crea un nuevo carrito, establece el estado en '0' => 'activo'
    public function store()
    {
        $carrito = new carrito();
        $carrito->estado = 0;
        $carrito->id_usuario  = auth()->user();
        $carrito->save();
        return $carrito;
    }

    //elimina un carrito
    public function delete($id)
    {
        $carrito = carrito::find($id);
        $carrito->delete();
        return  response()->json(['message' => 'Carrito eliminado.'], 200);
    }

    //agrega un nuevo producto al carrito actual, si no existe se crea un carrito
    public function agregarProducto(Request $request)
    {
        //busca el carrito actual
        $user = auth()->user();
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->get();

        //si es null, crea el carrito
        if ($carrito == null) {
            $carrito = $this->store();
        }

        //obtiene los productos guardados
        $productos = json_decode($carrito->id_productos);
        //agrega el nuevo producto
        $nuevoProducto = [
            'id_producto' => $request->input('id_producto'),
            'cantidad' => $request->input('cantidad')
        ];
        $productos[] = $nuevoProducto;

        //pasa el array a json
        $nuevosProductos = json_encode($productos);
        //guarda el nuevo valor
        $carrito->id_productos = $nuevosProductos;
        $carrito->save();
        return  response()->json(['message' => 'Producto agregado al carrito.'], 200);
    }

    //agrega un nuevo producto al carrito actual, si no existe se crea un carrito
    public function eliminarProducto(Request $request)
    {
        //busca el carrito actual
        $user = auth()->user();
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->get();

        //obtiene los productos guardados
        $productos = json_decode($carrito->id_productos);

        //busca la posicion del producto en el carrito
        // Busca el producto en el arreglo por su id_producto
        $indiceProducto = null;
        foreach ($productos as $indice => $producto) {
            if ($producto['id_producto'] == $request->id_producto) {
                $indiceProducto = $indice;
                break;
            }
        }
        if ($indiceProducto !== null) {
            // Si se encuentra el producto, lo elimina del arreglo
            array_splice($productos, $indiceProducto, 1);
        }

        //pasa el array a json
        $nuevosProductos = json_encode($productos);

        //actualiza el array
        $carrito->id_productos = $nuevosProductos;
        $carrito->save();

        return  response()->json(['message' => 'Producto eliminado del carrito.'], 200);
    }

    //compra el carrito actual del usuario autenticado
    public function comprarCarrito()
    {
        $user = auth()->user();
        //trae el ultimo carrito carrito con estado '0' 
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->get();
        $array = json_decode($carrito->id_productos);
        //por cada producto le descuenta la cantidad
        $producto = new producto();
        foreach ($array as $tupla) {
            $producto->eliminarProducto($tupla['id_producto'], $tupla['cantidad']);
        }
        $carrito->estado = 1;
        return  response()->json(['message' => 'Compra realizada correctamente.'], 200);
    }

}
