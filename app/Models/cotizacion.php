<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cotizacion extends Model
{
    use HasFactory;

    protected $fillable = ['es_guadalajara', 'es_aire_libre', 'temporada', 'es_evento_grande', 'es_todo_el_dia', 'manana_o_noche'];
}
