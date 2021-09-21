<?php

namespace App\Http\Livewire;

use App\Models\Casos;
use Livewire\Component;
use Carbon\Carbon;

class CrearCaso extends Component
{

    public $fecha, $numero_orden, $paciente, $estado, $observaciones;

    public function CrearCaso(){

        $today = Carbon::now()->format('Y-m-d');
        Casos::create([
            'fecha' => $today,
            'numero_orden' => $this->numero_orden,
            'paciente' => $this->paciente,
            'estado' => 'En proceso',
            'observaciones' => $this->observaciones,
        ]);

        $this->dispatchBrowserEvent('close-modal-caso');
        session()->flash('message', 'Caso creado con éxito.');
        return redirect('/casos');
    }

    public function CerrarCaso(){
        // $caso = Casos::findOrFail($numero_orden);
        dd($caso);
    }

    public function render()
    {
        return view('livewire.crear-caso', [
            'today' => Carbon::now()->format('Y-m-d')
        ]);
    }
}