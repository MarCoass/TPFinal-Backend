<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumoProducto extends Model
{
    use HasFactory;
    protected $table = 'insumo_productos';
    protected $fillable = ['id_insumo', 'id_producto', 'cantidad'];
    
    //funciones por la clave foranea
    public function Insumo()
    {
        return $this->belongsTo(Insumo::class, 'id_insumo');
    }
    
    public function Producto()
    {
        return $this->belongsTo(Producto::class, 'id_producto');
    }
}
