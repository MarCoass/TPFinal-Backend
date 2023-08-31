<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class esmalte extends Model
{
    use HasFactory;
    protected $table= 'esmalte';
    protected $fillable = ['nombre', 'numero', 'marca', 'estado'];
}
