<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esmalte extends Model
{
    use HasFactory;
    protected $table = 'esmaltes';
    protected $fillable = ['codigo_color', 'usos_maximos', 'usos', 'id_insumo'];

    // Define la relación con la tabla "insumos"
    public function Insumo()
    {
        return $this->belongsTo(Insumo::class, 'id_insumo')->cascade('delete');
    }
  
}
