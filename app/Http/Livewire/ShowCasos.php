<?php

namespace App\Http\Livewire;

use App\Models\Casos;
use App\Models\Llamadas;
use Livewire\Component;

class ShowCasos extends Component
{
    public function render()
    {
        return view('livewire.show-casos', [
            'casos' => Casos::all(),
            'llamadas' => Llamadas::all(),
        ]);
    }
}