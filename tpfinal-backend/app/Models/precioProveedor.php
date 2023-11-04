<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class precioProveedor extends Model
{
    use HasFactory;
    protected $table = 'precio_proveedores';
    protected $fillable = ['id_insumo', 'id_proveedor', 'precio'];

    //funciones por la clave foranea
    public function Proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'id_proveedor');
    }
    public function Insumo()
    {
        return $this->belongsTo(Insumo::class, 'id_insumo');
    }

    
}
