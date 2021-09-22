<?php

namespace App\Http\Livewire;
use App\Models\Llamadas;
use App\Models\Agentes;
use App\Models\TiposLlamadas;
use Livewire\Component;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class NuevoRegistro extends Component
{
    public $fecha, $tipo_llamada, $agente, $observaciones;

    public $fecha_filtro;

    public function resetInputFilter(){
        $this->fecha_filtro = null;
        $this->agente = null;
    }

    public function filtroLlamadas() {

        $sql = Llamadas::where([
            'fecha' => $this->fecha_filtro,
            'agente' => $this->agente
        ])->count();

         $this->dispatchBrowserEvent('close-modal-filter');

        $this->alert('success', 'Total llamadas '. $sql, [
            'position' =>  'bottom-end',
            'timer' =>  5000,
            'toast' =>  true,
            'confirmButtonText' =>  'Ok',
            'cancelButtonText' =>  'Cancel',
            'showCancelButton' =>  false,
            'showConfirmButton' =>  true,
      ]);


    }

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