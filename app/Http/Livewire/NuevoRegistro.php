<?php

namespace App\Http\Livewire;
use App\Models\Llamadas;
use App\Models\Agentes;
use App\Models\TiposLlamadas;
use Livewire\Component;
use Carbon\Carbon;

class NuevoRegistro extends Component
{
    public $fecha, $tipo_llamada, $agente, $observaciones;

    public function NuevoRegistro()
    {
        $validateData = $this->validate([
            'fecha' => 'required',
            'tipo_llamada' => 'required',
            'agente' => 'required',
            'observaciones' => 'required',
        ]);

        Llamadas::create($validateData);

        $this->dispatchBrowserEvent('close-modal-registro');
        session()->flash('message', 'Registro ingresado con éxito.');
        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.nuevo-registro', [
            'llamadas' => Llamadas::all(),
            'agentes' => Agentes::all(),
            'tipos_llamadas' => TiposLlamadas::all(),
            'today' => Carbon::now()->format('Y-m-d')
        ]);
    }
}