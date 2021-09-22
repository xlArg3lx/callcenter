<?php

namespace App\Http\Controllers;

use App\Models\Casos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Caso extends Controller
{
    public function edit(Request $request, $id) {

        $seguimiento = $request->input('seguimiento');

        if (DB::select('select estado from casos where estado = "Cerrado" and id = '.$id.'')) {
            session()->flash('error', 'El caso ya se encuentra en estado cerrado.');
            return redirect('/casos');
        }else {
            DB::update('update casos set estado = "Cerrado", seguimiento = "'.$seguimiento.'" where id = '.$id.'');
            session()->flash('message', 'Caso cerrado con éxito.');
            return redirect('/casos');
        }
    }

    public function delete($id) {
        $caso = Casos::find($id);
        $caso->delete();
        session()->flash('message', 'Caso eliminado correctamente.');
        return redirect('/casos');
    }
}