<?php

namespace App\Http\Livewire;

use Livewire\Component;
//Importar el modelo correspondiente al livewire
use App\Models\Equipo;
class Equipos extends Component
{
    public function render()
    {
        $equipos = Equipo::where('user_id', auth()->user()->id)->paginate(10);
        return view('livewire.equipos', [
            'equipos' => $equipos
        ]);
    }
}
