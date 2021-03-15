<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <div class="mt-8 text-2xl">
      Listado de equipos
    </div>
    <div class="mt-6"></div>
    <div class="flex justify-between">
      <div class="p-2">
      <input type="search" placeholder="Buscar" class="shadow appeareance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus: shadow-outline"  wire:model="q"/>
      </div>
      <div class="mr-2">
          <input type="checkbox" class="mr-2 leading-tight" wire:model="active"/>Equipos activos
      </div>
    </div>
<table class="border-separate border border-green-800 ...">

    <thead>
    <tr>
      <th class="w-1/4 ...">
      <div class="flex items-center">
      <button wire:click="sortBy('id')">ID
      </button>
        <x-sort-icon sortField="id" :sortBy="$sortBy" :sortAsc="$sortAsc" />
      </div>
      </th>
      <th class="w-1/4 ...">
      <div class="flex items-center">
      <button wire:click="sortBy('eq_modelo')">Modelo</button>
      <x-sort-icon sortField="eq_modelo" :sortBy="$sortBy" :sortAsc="$sortAsc" />
      </div>
      </th>


      <th class="w-1/4 ...">
      <div class="flex items-center">
      <button wire:click="sortBy('eq_marca')">Marca</button>
      <x-sort-icon sortField="eq_marca" :sortBy="$sortBy" :sortAsc="$sortAsc" />
      </div>
      </th>

      <th class="w-1/4 ...">
      <div class="flex items-center">
      <button wire:click="sortBy('precio')">Precio</button>
      <x-sort-icon sortField="precio" :sortBy="$sortBy" :sortAsc="$sortAsc" />
      </div>
      </th>

      @if($active)
      <th class="w-1/4 ...">status</th>
      @endif
      <th class="w-1/4 ...">acciones</th>
    </tr>
  </thead>
    <tbody>
        
        @foreach($equipos as $key)
        <tr>

          <td class="border border-green-600 ...">{{$key->id}}</td>
          <td class="border border-green-600 ...">{{$key->eq_marca}}</td>
          <td class="border border-green-600 ...">{{$key->eq_modelo}}</td>
          <td class="border border-green-600 ...">{{$key->precio}}</td>
          @if($active)
          <td class="border border-green-600 ...">{{$key->status ? 'Active' : 'Not-Active'}}</td>
          @endif
          <td class="border border-green-600 ..."><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
  Editar
</button><button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
  Eliminar
</button></td>
        </tr>
        @endforeach
        
</tbody>
 </table>
 <div class="mt-4">
 {{$equipos->links()}}
 </div>
 </div>