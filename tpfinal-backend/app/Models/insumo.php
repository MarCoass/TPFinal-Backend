<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumo extends Model
{
    use HasFactory;

    protected $table = 'insumos';
    protected $fillable = ['nombre', 'descripcion', 'marca', 'stock', 'estado', 'id_categoria', 'stock_minimo', 'tags'];

    protected $casts = [
        'tags' => 'array',
    ];
    
    //funciones por la clave foranea
    public function CategoriaInsumo()
    {
        return $this->belongsTo(CategoriaInsumo::class, 'id_categoria');
    }

    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'insumo_productos', 'id_insumo', 'id_producto')
            ->withPivot('cantidad');
    }
}
