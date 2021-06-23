 <!DOCTYPE html>
 <html>
 <head>
     <title>Login Laravel</title>
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>
 <body>
 <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
 <div class="container bg-gray-200 flex flex-col justify-center sm:max-w-xl sm:mx-auto max-w-sm sm:rounded-3xl overflow-hidden shadow-lg">
     <div class="card relative py-3 sm:max-w-xl sm:mx-auto ">
         <div class="formWrap">
             <form action="{{ route('login') }}" method="post">
                 @csrf
                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Vivetv.png/245px-Vivetv.png" alt="logo" width="200px">
                 <div class="mt-4 text-center"><h1>Formulario de Ingreso</h1>

                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('Email') }}">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                    </div>

                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('Password') }}">Password</label>
                        <input type="password"id="password" class="block mt-1 w-full" name="password" :value="old('password')" required autofocus>
                    </div>

                    <div class="relative h-6 flex items-center sm:h-7"">
                        <label for="rembember_me" class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div class="pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="bg-green-400 hover:bg-green-600 rounded-full">{{ __('Log in') }}</button>
                    </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 </div>
 </body>
 </html>