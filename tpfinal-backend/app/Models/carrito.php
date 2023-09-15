<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;
    protected $table = 'carritos';
    protected $fillable = ['id_usuario', 'id_productos', 'estado'];

    //funciones por la clave foranea
    public function idUsuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }


    public function idProductos()
    {
        return $this->belongsTo(Producto::class, 'id_productos');
    }

    protected $casts = [
        'id_productos' => 'array', 
    ];
}
