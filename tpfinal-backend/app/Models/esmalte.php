<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esmalte extends Model
{
    use HasFactory;
    protected $table = 'esmalte';
    protected $fillable = ['codigo_color', 'usos_maximo', 'usos', 'id_insumo'];

    // Define la relación con la tabla "insumos"
    public function insumo()
    {
        return $this->belongsTo(Insumo::class, 'id_insumo');
    }
}
