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

    public $sortBy = 'id';
    public $sortAsc = true;

    //validacion de strings
    protected $queryStrings = [
        'active' => ['except' => false],
        'q'  => ['except' => ''],
        'sortBy' => ['except' => 'id'],
        'sortAsc'  => ['except' => true],
    ];

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
        })
        //ordenar por ascendente o descendente
        ->orderBy($this->sortBy, $this->sortAsc ? 'ASC': 'DESC');
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

    public function sortBy($field)
    {
        if($field == $this->sortBy){
            $this->sortAsc = !$this->sortAsc;
        }
        $this->sortBy = $field;
    }
}
