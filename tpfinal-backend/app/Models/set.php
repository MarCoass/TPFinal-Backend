<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;
    protected $fillable = ['nombre', 'idCategoria', 'idCiudad', 'precio', 'urlImagenes', 'descripcion'];
    protected $table = 'sets';

    protected $casts = [
        'urlImagenes' => 'array',
    ];
    
    //funciones por la clave foranea
    public function categoria()
    {
        return $this->belongsTo(CategoriaSet::class, 'idCategoria');
    }

    public function ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'idCiudad');
    }

}
