<!-- resources/views/admin/panel.blade.php -->

<x-app-layout>
    <!-- Encabezado -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Panel de Administrador
        </h2>
    </x-slot>

    <!-- Contenido -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex">
                <!-- Contenedor Azul (Panel de Navegación) -->
                <div class="bg-blue-500 rounded-lg p-6 mr-4 w-1/4">
                    <div class="flex items-center mb-4">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo Travel Go" class="w-24 h-24">
                        <h1 class="ml-4 text-2xl font-bold text-white">Travel Go</h1>
                    </div>
                    <div class="text-white font-bold">Panel de Administrador</div>
                    <hr class="my-4 border-gray-600">
                    <ul class="list-none p-0">
                        <li class="cursor-pointer hover:bg-blue-700 rounded-md p-2 my-1">
                            <a href="{{ route('admin.panel') }}" class="flex items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Inicio
                            </a>
                        </li>
                        <li class="cursor-pointer hover:bg-blue-700 rounded-md p-2 my-1">
                            <a href="{{ route('admin.hotels.index') }}" class="flex items-center text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Gestionar Hoteles
                            </a>
                        </li>
                        <!-- Añade más opciones de navegación aquí según necesites -->
                    </ul>
                </div>
                <!-- Contenedor Amarillo (Panel Principal) -->
                <div id="panel-principal" class="bg-yellow-100 rounded-lg shadow-lg p-6 w-3/4">
                    <h2 class="text-2xl font-bold mb-4">¡Bienvenido!</h2>
                    <p class="text-gray-700">Bienvenido a Travel Go, tu plataforma de gestión de viajes. Aquí podrás encontrar herramientas para administrar hoteles, paquetes turísticos y mucho más.</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
