<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompradorPotencial extends Model
{
    protected $fillable = [
        'nombre',
        'contacto',
        'presupuesto',
        'preferencias',
    ];
}
