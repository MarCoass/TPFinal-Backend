<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ofertaProducto extends Model
{
    use HasFactory;
    protected $table = 'oferta_productos';
    protected $fillable = ['id_producto', 'id_oferta'];
     //funciones por la clave foranea
     public function Producto()
     {
         return $this->belongsTo(Producto::class, 'id_producto');
     }
      //funciones por la clave foranea
    public function Oferta()
    {
        return $this->belongsTo(Oferta::class, 'id_oferta');
    }
}
