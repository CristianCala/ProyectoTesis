 <!DOCTYPE html>
 <html>
 <head>
     <title>Login Laravel</title>
         <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 </head>
 <body>
 <div class="container sm:mx-auto">
     <div class="card">
         <div class="formWrap">
             <form action="{{ route('login') }}" method="post">
                 @csrf
                 <div class="mt-4 text-center"><h1>Formulario de Ingreso</h1>

                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('Email') }}">Email</label>
                        <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus>
                    </div>

                    <div class="mt-8 flex flex-col">
                        <label for="email" value="{{ __('Password') }}">Password</label>
                        <input type="password"id="password" class="block mt-1 w-full" name="password" :value="old('password')" required autofocus>
                    </div>

                    <div class="relative">
                        <label for="rembember_me" class="flex items-center">
                        <input type="checkbox" id="remember_me" name="remember" />
                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>
                    <div>
                            @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <button class="bg-green-400">{{ __('Log in') }}</button>
                    </div>
                 </div>
             </form>
         </div>
     </div>
 </div>
 </body>
 </html>