<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expediente extends Model
{
    protected $fillable = [
        'fecha',
        'estado',
        'resultado',
    ];

    public function property()
    {
        return $this->belongsTo('App\Models\PropiedadInmobiliaria', 'IDPropiedad');
    }

    public function buyer()
    {
        return $this->belongsTo('App\Models\CompradorPotencial', 'IDComprador');
    }
}
