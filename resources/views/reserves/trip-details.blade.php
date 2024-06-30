<x-app-layout>
    <section class="mt-20">
    <div class="container mx-auto px-4 py-8 bg-gray-100">
        <!-- Detalles del viaje -->
        <div class="trip-details bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="title-icons-container flex justify-between items-center mb-4">
                <h1 class="trip-title text-2xl font-bold">{{ $trip->from }} a {{ $trip->to }}</h1>
                <div class="icons flex space-x-4">
                    <span class="trip-location flex items-center text-gray-700"><i class="fas fa-map-marker-alt mr-2"></i> {{ $trip->location }}</span>
                    <span class="trip-rating flex items-center text-yellow-500"><i class="fas fa-star mr-2"></i> 4.5 (1200 reviews)</span>
                </div>
            </div>
            <img src="{{ $trip->image_url }}" alt="Imagen del viaje" class="trip-image w-full h-64 object-cover rounded-lg mb-4">
            <p class="trip-description text-gray-700 mb-6"><strong>Descripción:</strong> {{ $trip->description }}</p>
            <!-- Contenido de trip-features -->
            <div class="trip-features grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="feature bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col items-center">
                    <i class="fas fa-check-circle text-green-500 text-2xl mb-2"></i>
                    <p class="font-semibold">Cancelación Gratuita</p>
                    <span class="text-gray-500 text-center">Cancela hasta 24 horas antes para recibir un reembolso completo</span>
                </div>
                <div class="feature bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col items-center">
                    <i class="fas fa-mobile-alt text-blue-500 text-2xl mb-2"></i>
                    <p class="font-semibold">Mobile Ticketing</p>
                    <span class="text-gray-500 text-center">Utiliza tu teléfono o imprime tu vale</span>
                </div>
                <div class="feature bg-gray-50 p-4 rounded-lg shadow-sm flex flex-col items-center">
                    <i class="fas fa-heartbeat text-red-500 text-2xl mb-2"></i>
                    <p class="font-semibold">Precauciones de Salud</p>
                    <span class="text-gray-500 text-center">Se aplican medidas especiales de salud y seguridad. Aprende más</span>
                </div>
            </div>
        </div>
        
        <!-- Formulario de reserva -->
        <div class="reservation-form bg-white p-6 rounded-lg shadow-md mb-8">
            <h2 class="reservar-ahora text-xl font-bold mb-4">Reservar Ahora</h2>
            <hr class="mb-4">
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="form-group mb-4">
                    <label for="start_date" class="block text-gray-700 font-semibold mb-2">De:</label>
                    <input type="date" id="start_date" name="start_date" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-red-500" placeholder="Selecciona una fecha" required>
                </div>
                <div class="form-group mb-4">
                    <label for="end_date" class="block text-gray-700 font-semibold mb-2">Para:</label>
                    <input type="date" id="end_date" name="end_date" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-red-500" placeholder="Selecciona una fecha" required>
                </div>
                <div class="form-group mb-4">
                    <label for="guests" class="block text-gray-700 font-semibold mb-2">Número de Pasajeros:</label>
                    <select name="guests" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-red-500" required>
                        <option value="1">1 adulto</option>
                        <option value="2">2 adultos</option>
                        <option value="3">3 adultos</option>
                        <option value="4">4 adultos</option>
                        <option value="5">1 adulto, 1 niño</option>
                        <option value="6">2 adultos, 1 niño</option>
                    </select>
                </div>
                <div class="total-price text-xl font-bold text-green-600 mb-4">
                    ${{ $trip->price }}
                </div>
                <div class="reservation-buttons flex flex-col md:flex-row md:space-x-4">
                    <button type="submit" class="confirm bg-red-600 text-white px-4 py-2 rounded mb-2 md:mb-0">Confirmar Reserva</button>
                    <a href="#" class="wishlist bg-gray-200 text-gray-700 px-4 py-2 rounded mb-2 md:mb-0">Guardar en Lista de Deseos</a>
                    <a href="#" class="share bg-gray-200 text-gray-700 px-4 py-2 rounded">Compartir la Actividad</a>
                </div>
            </form>
        </div>
    </div>

    <!-- Sección de comentarios -->
    <x-comment-section :trip="$trip" :comments="$comments" />
</section>
</x-app-layout>
