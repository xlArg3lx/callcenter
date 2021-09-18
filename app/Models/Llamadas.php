<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Llamadas extends Model
{
    use HasFactory;
    protected $table = 'llamadas';
    protected $fillable = [
        'fecha',
        'tipo_llamada',
        'agente',
        'observaciones'
    ];
}