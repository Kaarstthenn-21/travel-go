<x-footer-only-layout>
    <!-- Contenedor de la imagen con superposición -->
    <div class="relative h-auto">
        <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" class="w-full h-full object-cover">
        <!-- Contenido superpuesto -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
            <div class="text-sm font-bold">Buscar tour</div>
            <div class="text-8xl font-bold" style="font-family: 'Carattere'">Viaja con nosotros</div>
        </div>
    </div>

    <div class="bg-gray-100 py-8">
        <div class="container mx-auto px-4 grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Contenedor de filtros -->
            <div class="filter-container bg-gray-200 rounded-lg p-4">
                <h2 class="font-bold text-xl mb-4">Filtrar por</h2>
                <div class="mb-4">
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-2 w-full">Precio: menor a mayor</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-2 w-full">Precio: mayor a menor</button>
                    <button class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded mb-2 w-full">Calificación</button>
                </div>
            </div>
            
            <!-- Contenedor de habitaciones -->
            <div class="rooms-container col-span-2">
                <div class="header mb-8 bg-gray-200 rounded-lg p-4">
                    <h1 class="font-bold text-2xl md:text-3xl">Habitaciones disponibles en {{ $hotel->name }}</h1>
                </div>
                
                <div class="main-content grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                    @foreach ($rooms as $room)
                    <div class="room-card bg-white rounded-lg shadow-md overflow-hidden">
                        @if ($room->image_url)
                        <img src="{{ $room->image_url }}" alt="{{ $room->type }}" class="w-full h-48 object-cover rounded-t-lg">
                        @else
                        <div class="w-full h-48 bg-gray-300 rounded-t-lg"></div>
                        @endif
                        <div class="p-4 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2">{{ $room->type }}</h3>
                                <p class="text-gray-600 mb-4">Camas: {{ $room->beds }}, TV: {{ $room->tv ? 'Sí' : 'No' }}, Baños: {{ $room->bathrooms }}</p>
                            </div>
                            <div class="flex justify-between items-end">
                                @if ($room->available)
                                <button class="bg-red-600 text-white px-4 py-2 rounded">Reservar ahora</button>
                                @else
                                <button class="bg-gray-400 text-white px-4 py-2 rounded cursor-not-allowed" disabled>No disponible</button>
                                @endif
                                <div class="text-right">
                                    <div class="text-xl font-bold text-green-600">${{ number_format($room->price, 2) }}</div>
                                    <small class="text-gray-500">Precio por noche</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-footer-only-layout>
