<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casos extends Model
{
    use HasFactory;
    protected $table = 'casos';
    protected $fillable = [
        'fecha',
        'numero_orden',
        'paciente',
        'estado',
        'observaciones',
        'seguimiento'
    ];
}