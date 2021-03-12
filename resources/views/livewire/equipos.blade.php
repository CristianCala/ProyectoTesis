<div class="p-6 sm:px-20 bg-white border-b border-gray-200">
<link rel="stylesheet" href="{{asset('css/app.css')}}">
    <div class="mt-8 text-2xl">
      Listado de equipos
    </div>
    <div class="mt-6"></div>

    <div class="flex justify-between">
      <div></div>
      <div class="mr-2">
          <input type="checkbox" class="mr-2 leading-tight" wire:model="active"/>Equipos activos
      </div>
    </div>
<table class="border-separate border border-green-800 ...">

    <thead>
    <tr>
      <th class="w-1/4 ...">ID</th>
      <th class="w-1/4 ...">Modelo</th>
      <th class="w-1/4 ...">Marca</th>
      <th class="w-1/4 ...">precio</th>
      <th class="w-1/4 ...">status</th>
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
          <td class="border border-green-600 ...">{{$key->status ? 'Active' : 'Not-Active'}}</td>
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