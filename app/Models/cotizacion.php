<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    use HasFactory;
    protected $table = 'cotizaciones';
    protected $fillable = [
        
        'ancho',
        'largo',
        'tipo',
        'cantidad_personas',
        'lugar',
        'luces',
        'conexiones',
        'mesas',
        'sillas',
        'tarimas',
        'color',
        'cortinas',
        'decoracion_extra',
        'status'
    ];
    
}
