<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LlamadasBanco extends Model
{
    use HasFactory;
    protected $fillable = [
        'fecha',
        'agendado',
        'agente_id'
    ];

    public function agentes()
    {
        return $this->belongsTo('App\Models\Agentes', 'agente_id');
    }
}