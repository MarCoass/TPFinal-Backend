<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidoPersonalizado extends Model
{
    use HasFactory;
    protected $table = 'pedido_personalizados';
    protected $fillable = ['id_producto', 'fecha_entrega', 'estado', 'id_usuario'];

    //funciones por la clave foranea
    public function Usuario()
    {
        return $this->belongsTo(User::class, 'id_usuario');
    }
    public function Producto(){
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
