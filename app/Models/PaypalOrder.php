<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaypalOrder extends Model
{
    use HasFactory;

    // Define el nombre de la tabla si no sigue la convención de nombres de Laravel
    protected $table = 'paypal_orders';

    // Campos que pueden ser asignados masivamente
    protected $fillable = [
        'user_id',
        'cotizacion_id',
        'pago',
    ];

    // Relación con el modelo Cliente (si existe)
    public function cliente()
    {
        return $this->belongsTo(User::class);
    }

    // Relación con el modelo Cotizacion
    public function cotizacion()
    {
        return $this->belongsTo(Cotizacion::class);
    }
}
