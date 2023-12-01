<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buyers extends Model
{
    use HasFactory;

    protected $fillable = [
        'Name',
        'Contact',
        'Budget',
        'Preferences',
    ];
}
