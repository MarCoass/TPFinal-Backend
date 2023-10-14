<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasOneThrough;

class producto extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ['nombre', 'descripcion', 'id_ciudad', 'precio', 'estado', 'url_imagen', 'stock'];
    

    public function Ciudad()
    {
        return $this->belongsTo(Ciudad::class, 'id_ciudad');
    }

    public function set():HasOne
    {
        return $this->hasOne(Set::class, 'id_producto', 'id');
    }


    public function categoria():HasOneThrough
    {
        return $this->hasOneThrough(Set::class, CategoriaSet::class);
    }

    public function tips():HasOneThrough
    {
        return $this->hasOneThrough(Set::class, tip::class);
    }

    public function insumos()
    {
        return $this->belongsToMany(Insumo::class, 'insumo_productos', 'id_producto', 'id_insumo')
            ->withPivot('cantidad');
    }
}
