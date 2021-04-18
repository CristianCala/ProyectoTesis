<!DOCTYPE html>
<html>
<head>
    <title>Register in laravel</title>
             <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="container sm:mx-auto">
    <div class="card">
        <div class="formWrap">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-4 text-center">
                    <h1>Registra tu usuario</h1>
                </div>

                <div class="mt-8 flex flex-col">
                    <label for="name" value="{{ __('Name') }}">Nombre</label>
                    <input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name">
                </div>

                <div class="mt-8 flex flex-col">
                    <label for="email" value="{{ __('Email') }}">Email</label>
                    <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                </div>

                  <div class="mt-8 flex flex-col">
                    <label for="password" value="{{ __('Password') }}">Confirm Password</label>
                    <input  id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                </div>

                <div class="mt-8 flex flex-col">
                    <label for="password_confirmation" value="{{ __('Confirm Password') }}">Confirm Password</label>
                    <input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
 
                            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="bg-blue-300">   {{ __('Register') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>