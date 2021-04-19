<!DOCTYPE html>
<html>
<head>
    <title>Register in laravel</title>
             <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div class="min-h-screen py-6 flex flex-col max-w-sm w-full lg:max-w-full lg:flex">
<div class="container sm:mx-auto py-6 flex flex-col justify-center sm:py-12 bg-gray-200 sm:max-w-xl sm:mx-auto max-w-sm sm:rounded-3xl overflow-hidden shadow-lg">
    <div class="card relative py-3 sm:max-w-xl sm:mx-auto">
        <div class="formWrap">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mt-4 text-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Vivetv.png/245px-Vivetv.png" alt="logo" width="200px">
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
 
                            <div class="flex items-center justify-end mt-4 pt-6 text-base leading-6 font-bold sm:text-lg sm:leading-7">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>
                <button class="bg-blue-300 rounded-full hover:bg-blue-600"> {{ __('Register') }}</button>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>