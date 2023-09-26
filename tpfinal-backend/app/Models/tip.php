<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tip extends Model
{
    use HasFactory;
    protected $table = 'tips';
    protected $fillable = ['nombre', 'largo', 'forma', 'id_insumo'];
    //funciones por la clave foranea
    public function Insumo()
    {
        return $this->belongsTo(Insumo::class, 'id_insumo');
    }
}
