<x-footer-only-layout>
    <div class="container">
        <!-- Detalles del viaje -->
        <div class="trip-details">
            <div class="title-icons-container">
                <h1 class="trip-title">{{ $trip->from }} a {{ $trip->to }}</h1>
                <div class="icons">
                    <span class="trip-location"><i class="fas fa-map-marker-alt"></i> {{ $trip->location }}</span>
                    <span class="trip-rating"><i class="fas fa-star"></i> 4.5 (1200 reviews)</span>
                </div>
            </div>
            <img src="{{ $trip->image_url }}" alt="Imagen del viaje" class="trip-image">
            <p class="trip-description"><strong>Descripción:</strong> {{ $trip->description }}</p>
            <!-- Contenido de trip-features -->
            <div class="trip-features">
                <div class="feature">
                    <i class="fas fa-check-circle"></i>
                    <p>Cancelación Gratuita</p>
                    <span>Cancela hasta 24 horas antes para recibir un reembolso completo</span>
                </div>
                <div class="feature">
                    <i class="fas fa-mobile-alt"></i>
                    <p>Mobile Ticketing</p>
                    <span>Utiliza tu teléfono o imprime tu vale</span>
                </div>
                <div class="feature">
                    <i class="fas fa-heartbeat"></i>
                    <p>Precauciones de Salud</p>
                    <span>Se aplican medidas especiales de salud y seguridad. Aprende más</span>
                </div>
            </div>
        </div>
        
        <!-- Formulario de reserva -->
        <div class="reservation-form">
            <!-- Encabezado "Reservar Ahora" y línea -->
            <h2 class="reservar-ahora">Reservar Ahora</h2>
            <hr>
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="start_date">De:</label>
                    <input type="text" id="start_date" name="start_date" placeholder="Selecciona una fecha" required>
                </div>
                <div class="form-group">
                    <label for="end_date">Para:</label>
                    <input type="text" id="end_date" name="end_date" placeholder="Selecciona una fecha" required>
                </div>
                <div class="form-group">
                    <label for="guests">Número de Pasajeros:</label>
                    <select name="guests" required>
                        <option value="1">1 adulto</option>
                        <option value="2">2 adultos</option>
                        <option value="3">3 adultos</option>
                        <option value="4">4 adultos</option>
                        <option value="5">1 adulto, 1 niño</option>
                        <option value="6">2 adultos, 1 niño</option>
                    </select>
                </div>
                <div class="total-price">
                    ${{ $trip->price }}
                </div>
                <div class="reservation-buttons">
                    <button type="submit" class="confirm">Confirmar Reserva</button>
                    <a href="#" class="wishlist">Guardar en Lista de Deseos</a>
                    <a href="#" class="share">Compartir la Actividad</a>
                </div>
            </form>
        </div>
        
    </div>
     <!-- Sección de comentarios -->
       
     <x-comment-section :trip="$trip" :comments="$comments" />
</x-footer-only-layout>
