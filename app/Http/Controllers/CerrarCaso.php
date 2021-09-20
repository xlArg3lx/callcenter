<?php

namespace App\Http\Controllers;

use App\Models\Casos;
use Illuminate\Http\Request;

class CerrarCaso extends Controller
{
    public function update(Request $request, Casos $numero_orden){
        $caso = Casos::find($numero_ordenid);
        var_dump($numero_orden);
    }
}