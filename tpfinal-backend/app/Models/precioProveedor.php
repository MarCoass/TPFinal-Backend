<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class precioProveedor extends Model
{
    use HasFactory;
    protected $table = 'precio_proveedores';
    protected $fillable = ['idInsumo', 'idProveedor', 'precio'];

    //funciones por la clave foranea
    public function Proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idCategoria');
    }
    public function Insumo()
    {
        return $this->belongsTo(Insumo::class, 'idInsumo');
    }
}
