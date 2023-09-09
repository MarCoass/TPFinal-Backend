<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedidoPersonalizado extends Model
{
    use HasFactory;
    protected $table = 'pedido_personalizados';
    protected $fillable = ['id_productos', 'precio_total', 'fecha_entrega', 'estado', 'id_usuario'];

    //funciones por la clave foranea
    public function Usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
    protected $casts = [
        'id_productos' => 'array',
    ];
}
