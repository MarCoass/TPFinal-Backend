<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notificacionPendiente extends Model
{
    use HasFactory;
    protected $table = 'notificaciones_pendientes';
    protected $fillable = ['idUsuario', 'idNotificacion', 'estado'];

    //funciones por la clave foranea
    public function idUsuario()
    {
        return $this->belongsTo(User::class, 'idUsuario');
    }
    public function idNotificacion()
    {
        return $this->belongsTo(Notificacion::class, 'idNotificacion');
    }
}
