<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tarea extends Model
{
    use HasFactory;
    protected $table = 'tareas';
    protected $fillable = ['titulo', 'descripcion', 'estado', 'fecha_vencimiento'];
}