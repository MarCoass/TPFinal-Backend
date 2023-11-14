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
            'sets_favoritos'=>[],
            'id_rol' => 2

        ]);
        

        $user->save();

        return response()->json(['message' => 'Usuario registrado exitosamente']);
    }

    public function obtenerListadoFavoritos(){
        $user = auth()->user();
        $productosController = new ProductosController();
        $productos=[];
        foreach ($user->sets_favoritos as $producto) {
            // $producto = json_decode($productoJSON, true);
            $productoInfo = $productosController->show($producto['id_producto']);
            if ($productoInfo) {
                array_push($productos, $productoInfo);
            }
        }    
        return response()->json($productos);
    }

    public function agregarAFavoritos(Request $request){
        $user = auth()->user();
         // Obtiene los productos guardados
         $productos = $user->sets_favoritos;
 
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
            return response()->json(['message' => 'Este producto ya está en tu lista de favoritos.', 'repetido' => true], 200);
         } else {
             // Si no existe, crea un nuevo producto
             $nuevoProducto = [
                'id_producto' => $request->input('id_producto'),
             ];
             $productos[] = $nuevoProducto;
         }
         // Pasa el array a JSON y guarda el nuevo valor
         $nuevosProductos = $productos;
         $user->sets_favoritos = $nuevosProductos;
         $user->save();
  
         return response()->json(['message' => 'Producto agregado a favoritos.', 'repetido'=> false], 200);
    }

    public function eliminarDeFavoritos(Request $request){
       //busca el carrito actual
       $user = auth()->user();

       //obtiene los productos guardados
       $productos = $user->sets_favoritos;

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
       $user->sets_favoritos = $productos;
       $user->save();

       return  response()->json(['message' => 'Producto eliminado del carrito.'], 200);
    }
}
