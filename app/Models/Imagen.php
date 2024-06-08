<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagen extends Model
{
    /**
     * Obtener el producto al que pertenece la imagen.
     */
    protected $table = 'imagenes';
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }
}