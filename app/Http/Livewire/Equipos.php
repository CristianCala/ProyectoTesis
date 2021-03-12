<?php

namespace App\Http\Livewire;
//Importar el componente
use Livewire\Component;
//Importar el modelo correspondiente al livewire
use App\Models\Equipo;
//paginacion
use Livewire\WithPagination;
class Equipos extends Component
{
    use WithPagination;

    public $active;


    public function render()
    {   //paginacion para la tabla de equipos
        $equipos = Equipo::where('user_id', auth()->user()->id)
        //validacion de equipos activos o inactivos
        ->when($this->active, function ($query)
        {
            return $query->active();
        })
        ->paginate(10);
        return view('livewire.equipos', [
            'equipos' => $equipos
        ]);
    }
    public function updatingActive()
    {
        $this->resetPage();
    }
}
