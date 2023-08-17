<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cotizacion extends Model
{
    use HasFactory;
    protected $fillable = ['idUsuario', 'estado', 'idSets'];
    protected $table = 'cotizaciones';
    protected $casts = [
        'idSets' => 'array',
    ];
    //funciones por la clave foranea
    public function categoria()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }
}
