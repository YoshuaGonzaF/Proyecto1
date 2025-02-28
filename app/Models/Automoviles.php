<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automoviles extends Model
{
    use HasFactory;
    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'color',
        'precio',

    ];
}
