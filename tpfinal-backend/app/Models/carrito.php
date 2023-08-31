<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carrito extends Model
{
    use HasFactory;
    protected $table = 'carritos';
    protected $fillable = ['idUsuario', 'idSets', 'idKits'];

    //funciones por la clave foranea
    public function idUsuario()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }

    public function idSets()
    {
        return $this->belongsTo(Set::class, 'idSet');
    }

    public function idKits()
    {
        return $this->belongsTo(kitAplicacion::class, 'idKits');
    }

    protected $casts = [
        'idSets' => 'array', 
        'idKits' => 'array'
    ];
}
