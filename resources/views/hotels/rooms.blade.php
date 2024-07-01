<x-footer-only-layout>
    <div class="container mx-auto px-4 py-8 bg-gray-100">
        <div class="header mb-8">
            <h1 class="font-bold text-2xl md:text-3xl">Habitaciones disponibles en {{ $hotel->name }}</h1>
        </div>
        
        <div class="main-content">
            @foreach ($rooms as $room)
                <div class="room-card mb-6 bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="flex">
                        <div class="w-1/3">
                            <!-- Aquí puedes mostrar una imagen de la habitación si tienes -->
                        </div>
                        <div class="w-2/3 p-4 flex flex-col justify-between">
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
                </div>
            @endforeach
        </div>
    </div>
</x-footer-only-layout>
