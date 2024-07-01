<x-app-layout>
    <!-- Encabezado -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Editar Hotel y Habitaciones
        </h2>
    </x-slot>

    <!-- Contenido -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <!-- Formulario para actualizar la información del hotel -->
                <form action="{{ route('admin.hotels.update', $hotel->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Información del Hotel Editable -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Información del Hotel</h3>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Nombre</label>
                            <input type="text" name="name" id="name" value="{{ $hotel->name }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="description" class="block text-sm font-medium text-gray-700">Descripción</label>
                            <textarea name="description" id="description" rows="4" class="form-textarea mt-1 block w-full rounded-md shadow-sm">{{ $hotel->description }}</textarea>
                        </div>
                        <div class="mb-4">
                            <label for="price" class="block text-sm font-medium text-gray-700">Precio</label>
                            <input type="text" name="price" id="price" value="{{ $hotel->price }}" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="image_url" class="block text-sm font-medium text-gray-700">URL de la imagen</label>
                            <input type="text" name="image_url" id="image_url" value="{{ $hotel->image_url }}" class="form-input rounded-md shadow-sm mt-1 block w-full">
                        </div>
                    </div>

                    <!-- Botones de Acción para guardar cambios del hotel -->
                    <div class="mt-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md">Guardar Cambios del Hotel</button>
                    </div>
                </form>

                <!-- Formulario para editar habitaciones -->
                <form action="{{ route('admin.hotels.rooms.update', $hotel->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Listado de Habitaciones -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Listado de Habitaciones</h3>
                        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                            @foreach ($rooms as $room)
                                <div class="border rounded p-4">
                                    <p class="text-lg font-medium">{{ $room->type }}</p>
                                    <p class="text-sm text-gray-600">{{ $room->beds }} camas | {{ $room->bathrooms }} baños</p>
                                    <p class="text-sm text-gray-600">Disponible: {{ $room->available ? 'Sí' : 'No' }}</p>
                                    <p class="text-sm text-gray-600">TV: {{ $room->tv ? 'Sí' : 'No' }}</p>
                                    <!-- Formulario para eliminar habitación -->
                                    <form action="{{ route('admin.hotels.rooms.destroy', ['hotel' => $hotel->id, 'room' => $room->id]) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 ml-2">Eliminar</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Agregar Nueva Habitación -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-2">Agregar Nueva Habitación</h3>
                        <div class="mb-4">
                            <label for="room_type" class="block text-sm font-medium text-gray-700">Tipo de Habitación</label>
                            <input type="text" name="room_type" id="room_type" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="beds" class="block text-sm font-medium text-gray-700">Cantidad de Camas</label>
                            <input type="number" name="beds" id="beds" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="bathrooms" class="block text-sm font-medium text-gray-700">Cantidad de Baños</label>
                            <input type="number" name="bathrooms" id="bathrooms" class="form-input rounded-md shadow-sm mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="tv" class="block text-sm font-medium text-gray-700">¿Tiene TV?</label>
                            <input type="checkbox" name="tv" id="tv" class="form-checkbox rounded-md shadow-sm mt-1">
                        </div>
                        <div class="mb-4">
                            <label for="available" class="block text-sm font-medium text-gray-700">¿Disponible?</label>
                            <input type="checkbox" name="available" id="available" class="form-checkbox rounded-md shadow-sm mt-1" checked>
                        </div>
                        <button type="button" id="addRoomBtn" class="bg-green-500 hover:bg-green-600 text-white font-semibold py-2 px-4 rounded-md shadow-md">Agregar Habitación</button>
                    </div>

                    <!-- Botones de Acción para guardar cambios de habitaciones -->
                    <div class="mt-6">
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md shadow-md">Guardar Cambios de Habitaciones</button>
                        <a href="{{ route('admin.hotels.index') }}" class="mt-4 inline-block bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-md shadow-md">Cancelar</a>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const addRoomBtn = document.getElementById('addRoomBtn');
            addRoomBtn.addEventListener('click', function () {
                const roomType = document.getElementById('room_type').value;
                const beds = document.getElementById('beds').value;
                const bathrooms = document.getElementById('bathrooms').value;
                const tv = document.getElementById('tv').checked;
                const available = document.getElementById('available').checked;

                const roomHtml = `
                    <div class="border rounded p-4">
                        <p class="text-lg font-medium">${roomType}</p>
                        <p class="text-sm text-gray-600">${beds} camas | ${bathrooms} baños</p>
                        <p class="text-sm text-gray-600">Disponible: ${available ? 'Sí' : 'No'}</p>
                        <p class="text-sm text-gray-600">TV: ${tv ? 'Sí' : 'No'}</p>
                    </div>
                `;

                const roomsContainer = document.querySelector('.grid-cols-1');
                roomsContainer.innerHTML += roomHtml;
            });
        });
    </script>
</x-app-layout>
