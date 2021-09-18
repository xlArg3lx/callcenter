<?php

namespace App\Http\Livewire;
use App\Models\Llamadas;
use Livewire\Component;

class ShowRegistros extends Component
{
    protected $listeners = ['render' => 'render'];

    public function render()
    {
        return view('livewire.show-registros', [
            'llamadas' => Llamadas::all()
        ]);
    }
}