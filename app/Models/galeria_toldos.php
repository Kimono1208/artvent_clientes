<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class galeria_toldos extends Model
{
    use HasFactory;
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

}
