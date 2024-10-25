<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reloj extends Model
{
    use HasFactory;

    protected $table = 'reloj'; 
    protected $fillable = [
        'marca',
        'modelo',
        'material_correa',
        'resistencia_agua',
    ];
}

