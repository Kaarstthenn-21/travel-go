<x-guest-layout>
<div class="flex justify-center items-center min-h-screen">
    <div class="w-full max-w-md lg:max-w-3xl bg-white bg-opacity-80 shadow-md overflow-hidden sm:rounded-[30px] h-auto lg:h-[500px]">
        <div class="flex flex-col lg:flex-row items-center justify-between h-full p-6 lg:p-0">         
            <!-- Formulario -->
            <form method="POST" action="{{ route('login') }}" class="w-full lg:w-4/5">
                @csrf

                <h1 class="text-4xl lg:text-7xl font-bold text-center mb-6 lg:mb-4" style="font-family: 'Carattere', serif;">
                    Travel GO
                </h1>

                <!-- Email Address -->
                <div class="px-4 lg:px-20">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="border-indigo-900 block mt-1 w-full sm:w-2/3 sm:rounded-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4 px-4 lg:px-20">
                    <x-input-label for="password" :value="__('Contraseña')" />
                    <x-text-input id="password" class="border-indigo-900 block mt-1 w-full sm:w-2/3 sm:rounded-full" type="password" name="password" required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4 px-4 lg:px-20">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-500 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Recuérdame') }}</span>
                    </label>
                </div>

                <div class="mt-4 text-center px-4 lg:px-20">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-orange-500 hover:text-orange-700 rounded-md focus:outline-none focus:left-2 focus:left-offset-2 focus:left-orange-500" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div> 
                
                <div class="flex items-center justify-between mt-4 px-4 lg:px-20">
                    <x-primary-button class="w-full lg:w-auto ms-3 sm:rounded-full bg-orange-500 hover:bg-orange-700">
                        {{ __('Inicia Sesión') }}
                    </x-primary-button>
                </div>

                <div class="mt-4 text-center px-4 lg:px-20">
                    <a class="underline text-sm text-orange-500 hover:text-orange-700 rounded-md focus:outline-none focus:left-2 focus:left-offset-2 focus:left-orange-500" href="{{ route('register') }}">
                        {{ __('¿Todavía no te registras?') }}
                    </a>
                </div>
            </form>

            <!-- Imagen -->
            <div class="mt-6 lg:mt-0 lg:mr-5">
                <img src="{{ asset('images/icono5.ico') }}" alt="Fondo de pantalla" class="w-[150px] h-[150px] lg:w-[300px] lg:h-[300px] object-cover">
            </div>
        </div>
    </div>
</div>
</x-guest-layout>
