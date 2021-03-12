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
    public $q;

    public function render()
    {   //paginacion para la tabla de equipos
        $equipos = Equipo::where('user_id', auth()->user()->id)
        //validacion de algoritmo de busqueda
        ->when($this->q, function ($query){
            return $query->where(function ($query)
            {   //Busqueda por elementos de base de datos
                $query->where('eq_modelo', 'like', '%'. $this->q .'%')
                        ->orWhere('eq_marca', 'like', '%'. $this->q .'%')
                            ->orWhere('precio', 'like', '%'. $this->q .'%');
            });
        })
        //validacion de equipos activos o inactivos
        ->when($this->active, function ($query)
        {
            return $query->active();
        });
        //algoritmo de busqueda
        $query = $equipos->toSql();
        $equipos = $equipos->paginate(10);
        return view('livewire.equipos', [
            'equipos' => $equipos,
            'query' => $query
        ]);
    }
    public function updatingActive()
    {
        $this->resetPage();
    }

    public function updatingQ()
    {
        $this->resetPage();
    }
}
