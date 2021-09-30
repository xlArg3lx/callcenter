<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LlamadasBanco;

class LlamadasBancoController extends Controller
{
    //
    public function store(Request $request){

        $this->validate($request, [
            'fecha' => 'required',
            'agendado' => 'required',
            'agente_id' => 'required',
        ]);

        $data = new LlamadasBanco();
        $data->fecha = $request->input('fecha');
        $data->agendado = $request->input('agendado');
        $data->agente_id = $request->input('agente_id');

        $data->save();
        return redirect('gracias');
    }
}