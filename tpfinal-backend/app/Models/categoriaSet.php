<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaSet extends Model
{
    use HasFactory;
    protected $fillable = ['nombre','descripcion','precioBase'];
    protected $table = 'categoria_sets';
}
