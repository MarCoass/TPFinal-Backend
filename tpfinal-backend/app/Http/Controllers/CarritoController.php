<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarritoController extends Controller
{
    //Obtiene el carrito actual del usuario autenticado
    // public function verCarritoActual()
    // {

    //     $user = auth()->user();

    //     //trae el ultimo carrito carrito con estado '0' 
    //     $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->first();
    //     return response()->json($carrito);
    // }

    public function verCarritoActual()
    {
        $user = auth()->user();
    
        // Trae el último carrito con estado '0' del usuario
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->first();
    
        if ($carrito) {
            // Obten productos en el carrito actual
            $productosEnCarrito = $this->productosEnCarritoActual($carrito->id);
            $carrito->productos = $productosEnCarrito;
        }
    
        return response()->json($carrito);
    }

// Función para recuperar los productos del carrito
public function productosEnCarritoActual($carritoId)
{
    $carrito = DB::table('carritos')
        ->where('id', $carritoId)
        ->first();

        if ($carrito) {
            $id_productos = json_decode($carrito->id_productos);
        
            if ($id_productos) {
                // Aquí seleccionas los productos en el carrito
                $productosEnCarrito = DB::table('productos')
                    ->whereIn('id', array_column($id_productos, 'id_producto'))
                    ->get();
        
                // Devuelves la respuesta JSON
                return response()->json($productosEnCarrito);
            }
        }
        
        // Si no hay carrito o no contiene productos, puedes devolver una respuesta vacía
        return response()->json([]);
        
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
        // Busca el carrito actual
        $user = auth()->user();
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', '=', 0)->first();

        // Si el carrito no existe, créalo
        if (!$carrito) {
            $carrito = new carrito();
            $carrito->estado = 0;
            $carrito->id_usuario = auth()->user()->id;
            $carrito->id_productos = json_encode([]);
            $carrito->save();
        }

        // Obtiene los productos guardados
        $productos = json_decode($carrito->id_productos, true);

        //busca si ya existe el producto
        $indiceProducto = null;

        for ($i = 0; $i < sizeOf($productos); $i++)
           {
                if ($productos[$i]['id_producto'] == $request->input('id_producto')) {
                    $indiceProducto = $i;
                    break;
                }
            }
        // Si encontró un producto existente, aumenta la cantidad
        if ($indiceProducto !== null) {
            $productos[$indiceProducto]['cantidad'] += $request->input('cantidad');
        } else {
            // Si no existe, crea un nuevo producto
            $nuevoProducto = [
                'id_producto' => $request->input('id_producto'),
                'cantidad' => $request->input('cantidad')
            ];
            $productos[] = $nuevoProducto;
        }
        // Pasa el array a JSON y guarda el nuevo valor
        $nuevosProductos = json_encode($productos);
        $carrito->id_productos = $nuevosProductos;
        $carrito->save();

        return response()->json(['message' => 'Producto agregado al carrito.'], 200);
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
