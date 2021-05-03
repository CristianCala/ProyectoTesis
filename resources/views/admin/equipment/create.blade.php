<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar nuevo equipo</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    <div class="container bg-gray-200 flex flex-col justify-center sm:max-w-xl sm:mx-auto max-w-sm sm:rounded-3xl overflow-hidden shadow-lg">
    <div class="card relative py-3 sm:max-w-xl sm:mx-auto ">
    <div class="formWrap">
    <form action="{{url('/admin/equipment')}}" method="post">
    @csrf
    <div class="mt-4 text-center">Registro de equipos</div>
    <div class="mt-8 flex flex-col">
      <label for="text" value="{{ __('eq_modelo') }}">Modelo</label>
         <input id="eq_modelo" class="block mt-1 w-full" type="text" name="eq_modelo" :value="old('eq_modelo')" required autofocus>
    </div>

     <div class="mt-8 flex flex-col">
      <label for="email" value="{{ __('eq_marca') }}">Marca</label>
       <input type="text"id="eq_marca" class="block mt-1 w-full" name="eq_marca" :value="old('eq_marca')" required autofocus>
     </div>

                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('eq_serial') }}">Serial</label>
                        <input id="eq_serial" class="block mt-1 w-full" type="text" name="eq_serial" :value="old('eq_serial')" required autofocus>
                    </div>

                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('eq_nbiennacional') }}">Bien nacional</label>
                        <input type="text"id="eq_nbiennacional" class="block mt-1 w-full" name="eq_nbiennacional" :value="old('eq_nbiennacional')" required autofocus>
                    </div>
                    <div class="mt-8 flex flex-col">
                        <label for="text" value="{{ __('eq_estatus') }}">Estado</label>
                        <input id="eq_estatus" class="block mt-1 w-full" type="text" name="eq_estatus" :value="old('eq_estatus')" required autofocus>
                    </div>
        <button>Registrar</button>
    </form>
    </div>
    <div class="mt-4">
            <a href="{{url('/dashboard')}}" class="btn bg-gray-100 rounded-md text-2xl">Volver</a>
</div>
    </div>
    </div>
    </div>
</body>
</html>