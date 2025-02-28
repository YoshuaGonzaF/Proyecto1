<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'telefono',
        'genero',
        'sueldo',
        'puesto',
        'numero_seguro',
        'correo_electronico'
    ];
}
