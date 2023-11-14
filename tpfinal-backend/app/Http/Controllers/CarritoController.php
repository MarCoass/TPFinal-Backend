<?php

namespace App\Http\Controllers;

use App\Models\carrito;
use App\Models\producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ProductosController;


class CarritoController extends Controller
{
    //Obtiene el carrito actual del usuario autenticado
    public function verCarritoActual()
    {
        $user = auth()->user();
    
        // Trae el último carrito con estado '0' del usuario
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->first();
    
        if ($carrito) {
            // Obten productos en el carrito actual
            $productosEnCarrito = $this->obtenerProductosCarrito($carrito->id_productos);
            $carrito->productos = $productosEnCarrito;
        }
    
        return response()->json($carrito);
    }

    // Función para obtener los datos de los productos del carrito

    public function obtenerProductosCarrito($arrayProductos){
       
        $productosController = new ProductosController();
        $productos=[];
        foreach ($arrayProductos as $producto) {
            // $producto = json_decode($productoJSON, true);
            $productoInfo = $productosController->show($producto['id_producto']);
            if ($productoInfo) {
                array_push($productos, $productoInfo);
            }
        }
        return $productos;
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
             $carrito->id_productos = [];
             $carrito->save();
        }
 
        // Obtiene los productos guardados
        $productos = $carrito->id_productos;
 
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
        $nuevosProductos = $productos;
        $carrito->id_productos = $nuevosProductos;
        $carrito->save();
 
        return response()->json(['message' => 'Producto agregado al carrito.'], 200);
     }


     //agrega un nuevo producto al carrito actual, si no existe se crea un carrito
    
     public function eliminarProducto(Request $request)
     {
        //busca el carrito actual
        $user = auth()->user();
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->get()->first();
 
        //obtiene los productos guardados
        $productos = $carrito->id_productos;
 
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
        // $nuevosProductos = json_encode($productos);
 
        //actualiza el array
        $carrito->id_productos = $productos;
        $carrito->save();

        return  response()->json(['message' => 'Producto eliminado del carrito.'], 200);
     }
 

    public function actualizarCarrito(Request $request)
    {
        $user = auth()->user();
        // return response()->json(['data_received' => $request->all()]);
        error_log('Datos recibidos: ' . json_encode($request->all())); // Esto registra los datos recibidos en el registro de errores
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->first();
        $carrito->id_productos = $request->id_productos;
        $carrito->save();
    }

      //compra el carrito actual del usuario autenticado
    public function comprarCarrito()
    {
        $user = auth()->user();
        //trae el ultimo carrito carrito con estado '0'
        $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->get()->first();
        // return  response()->json(['data' => $carrito], 200);
        $array = $carrito->id_productos;

        //por cada producto le descuenta la cantidad
        $productosController = new ProductosController();
        foreach ($array as $tupla) {
            $productosController->restarStockCompra($tupla);
        }
        $carrito->estado = 1;
        return  response()->json(['message' => 'Compra realizada correctamente.'], 200);
    }

    public function comprobarStockProductos($productos){
        // $user = auth()->user();
        // $carrito = carrito::where('id_usuario', $user->id)->where('estado', 0)->first();
        // $arrayProductos = json_decode($producto);
        $productosArray = json_decode($productos, true);
        foreach ($productosArray as $producto){
            $productoEnDB = Producto::where('id', $producto['id_producto'])->get()->first();
            // return response()->json(['data' => $productoEnDB, 'stock'=>false]);
            if ($productoEnDB->stock < $producto['cantidad']) {
                return response()->json(['data' => $productoEnDB, 'stock'=>false]);// Si no hay suficiente stock, retorna falso 
            }
        }
        return response()->json(['data' => '', 'stock'=>true]);

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

   

   
  
}
