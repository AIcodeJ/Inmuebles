<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedients extends Model
{
    use HasFactory;

    protected $fillable = [
        'IDProperty',
        'Date',
        'Status',
        'Result',
        'buyer_id',
    ];

    public function property()
    {
        return $this->belongsTo(Properties::class, 'IDProperty', 'IDProperty');
    }

    public function buyer()
    {
        return $this->belongsTo(Buyers::class, 'buyer_id');
    }
}
