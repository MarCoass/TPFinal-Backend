<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $table= 'proveedores';
    protected $fillable = ['nombre', 'direccion', 'anotacion', 'tags'];
    protected $casts = [
        'tags' => 'array',
    ];

    public function preciosProveedores(){
        return $this->hasMany(precioProveedor::class, 'id_producto', 'id');
    }
}