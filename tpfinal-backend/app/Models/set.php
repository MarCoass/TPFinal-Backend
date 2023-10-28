<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;
    protected $fillable = ['id_categoria', 'id_tips', 'id_producto'];
    protected $table = 'sets';
    
    //funciones por la clave foranea
    public function CategoriaSet()
    {
        return $this->belongsTo(CategoriaSet::class, 'id_categoria');
    }

    public function Tip()
    {
        return $this->belongsTo(Tip::class, 'id_tips');
    }

    public function Producto()
    {
        return $this->belongsTo(producto::class, 'id_producto');
    }

}
