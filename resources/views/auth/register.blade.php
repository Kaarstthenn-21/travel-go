<x-guest-layout>
    <div class="flex justify-end h-screen">
<<<<<<< HEAD
        <div class="w-full max-w-lg h-full bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex items-center justify-center h-full px-12">    
                <form method="POST" action="{{ route('register') }}" class="w-full">
=======
        <div class="w-[700px] h-full bg-white shadow-md overflow-hidden sm:rounded-lg">
            <div class="flex items-center justify-center h-full">    
                <form method="POST" action="{{ route('register') }}" class="w-3/5">
>>>>>>> 46507ce7e04a9dc06410844bbd7e9887807168b2
                    @csrf

                    <h1 class="text-4xl md:text-4xl font-bold text-center mb-12" style="font-family: 'Carattere', serif;">Regístrate para obtener<br> Ofertas de Viajes</h1>

                    <!-- Name -->
                    <div>
                        <x-input-label for="name" :value="__('Nombre')" />
                        <x-text-input id="name" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <!-- Email Address -->
                    <div class="mt-4">
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input id="email" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>

                    <!-- Password -->
                    <div class="mt-4">
                        <x-input-label for="password" :value="__('Contraseña')" />
                        <x-text-input id="password" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="password" name="password" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <x-input-label for="password_confirmation" :value="__('Confirme la contraseña')" />
                        <x-text-input id="password_confirmation" class="border-indigo-900 block mt-1 w-full sm:rounded-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                    </div>

                    <div class="flex flex-col items-center justify-end mt-4">
                        <x-primary-button class="flex items-center justify-center sm:rounded-full bg-orange-500 hover:bg-orange-700 w-full mt-12">
                            {{ __('Registrar') }}
                        </x-primary-button>

                        <p class="mt-5">¿Ya tienes cuenta?
                        <a class="underline text-sm text-orange-500 hover:text-orange-700 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500" href="{{ route('login') }}">
                            {{ __('Inicia sesión') }}
                        </a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-guest-layout>
