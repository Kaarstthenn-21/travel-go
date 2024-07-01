<!-- resources/views/admin/hotels/index.blade.php -->

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
                    <h2 class="text-2xl font-bold mb-4">Gestionar Hoteles</h2>

                    <!-- Botón y enlace para agregar un nuevo hotel -->
                    <a href="{{ route('admin.hotels.create') }}" class="btn btn-primary mb-4">Agregar Nuevo Hotel</a>

                    <!-- Tabla existente de hoteles -->
                    <table class="min-w-full bg-white">
                        <thead>
                            <tr>
                                <th class="py-2">Nombre</th>
                                <th class="py-2">Descripción</th>
                                <th class="py-2">Precio</th>
                                <th class="py-2">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($hotels as $hotel)
                                <tr>
                                    <td class="py-2">{{ $hotel->name }}</td>
                                    <td class="py-2">{{ $hotel->description }}</td>
                                    <td class="py-2">{{ $hotel->price }}</td>
                                    <td class="py-2">
                                        <a href="{{ route('admin.hotels.edit', $hotel->id) }}" class="text-blue-500">Editar</a>
                                        <form action="{{ route('admin.hotels.destroy', $hotel->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
