<?php

namespace App\Http\Controllers;

use App\Models\Casos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CerrarCaso extends Controller
{
    public function edit($id) {

        if (DB::select('select estado from casos where estado = "Cerrado" and id = '.$id.'')) {
            session()->flash('error', 'El caso ya se encuentra en estado cerrado.');
            return redirect('/casos');
        }else {
            DB::update('update casos set estado = "Cerrado" where id = '.$id.'');
            session()->flash('message', 'Caso cerrado con éxito.');
            return redirect('/casos');
        }

    }

    public function update(Request $request, Casos $numero_orden){
        $caso = Casos::find($numero_ordenid);
        var_dump($numero_orden);
    }
}