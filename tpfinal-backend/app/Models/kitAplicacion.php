<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kitAplicacion extends Model
{
    use HasFactory;
    protected $table = 'kits_aplicacion';
    protected $fillable = ['nombre', 'descripcion', 'precio', 'urlImagen', 'estado'];
}
