<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropiedadInmobiliaria extends Model
{
    protected $fillable = [
        'direccion',
        'descripcion',
        'valor_estimado',
        'estado',
        'distribucion_inmueble',
        'metros_construccion',
        'metros_superficie',
        'municipio',
    ];
}
