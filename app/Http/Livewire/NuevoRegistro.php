<?php

namespace App\Http\Livewire;
use App\Models\Llamadas;
use App\Models\Agentes;
use App\Models\TiposLlamadas;
use Livewire\Component;

class NuevoRegistro extends Component
{
    public $fecha, $tipo_llamada, $agente, $observaciones;

    public function NuevoRegistro()
    {
        Llamadas::create([
            'fecha' => $this->fecha,
            'tipo_llamada' => $this->tipo_llamada,
            'agente' => $this->agente,
            'observaciones' => $this->observaciones
        ]);
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
        ]);
    }
}