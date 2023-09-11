<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class insumo extends Model
{
    use HasFactory;

    protected $table = 'insumos';
    protected $fillable = ['nombre', 'descripcion', 'marca', 'stock', 'estado', 'id_categoria', 'stock_minimo'];
    
    //funciones por la clave foranea
    public function CategoriaInsumo()
    {
        return $this->belongsTo(CategoriaInsumo::class, 'id_categoria');
    }
}
