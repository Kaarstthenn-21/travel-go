<x-app-layout>
    <div class="relative h-auto">
        <!-- Contenedor de la imagen con superposición -->
        <div class="relative h-auto">
            <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" class="w-full h-full object-cover">
            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                <div class="text-sm font-bold">Buscar tour</div>
                <div class="text-8xl font-bold" style="font-family: 'Carattere'">Viaja con nosotros</div>
            </div>
        </div>

        <!-- Contenedor de cuerpo -->
        <div class="container mx-auto mt-[-50px] mb-10 shadow-lg">
            <!-- Barra de tareas -->
            <div class="flex justify-center bg-gray-100 h-[100px] rounded-t-lg">
                <a href="{{ route('paquetes.index', ['sort' => 'fecha']) }}" class="px-4 text-2xl font-bold bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 rounded-tl-lg">Fecha</a>
                <a href="{{ route('paquetes.index', ['sort' => 'precio_mayor']) }}" class="px-4 text-2xl font-bold bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Precio Mayor</a>
                <a href="{{ route('paquetes.index', ['sort' => 'precio_menor']) }}" class="px-4 text-2xl font-bold bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Precio Menor</a>
                <a href="{{ route('paquetes.index', ['sort' => 'nombre']) }}" class="px-4 text-2xl font-bold bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 rounded-tr-lg">Nombre (A-Z)</a>
            </div>

            <!-- Cuerpo -->
            <div class="flex flex-wrap justify-center bg-gray-100 border border-gray-400">
                <!-- Catalogo de viajes -->
                <div class="flex flex-wrap justify-center w-full md:w-[60%] mt-5 space-x-2 ">
                    @foreach ($paquetes as $paquete)
                    <a class="flex flex-col items-center w-[40%] md:w-[48%] lg:w-[32%] mb-8" href="{{ route('Paquetes.reserva', ['id' => $paquete->id]) }}">
                        <div class="border border-gray-400 flex flex-col items-center w-full bg-white rounded-lg transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-lg">
                            <img src="https://img.freepik.com/foto-gratis/colores-arremolinados-interactuan-danza-fluida-sobre-lienzo-que-muestra-tonos-vibrantes-patrones-dinamicos-que-capturan-caos-belleza-arte-abstracto_157027-2892.jpg?size=626&ext=jpg&ga=GA1.1.2113030492.1719705600&semt=sph" alt="{{ $paquete->nombre }}" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="w-full h-8 bg-orange-500 text-white text-sm flex justify-center items-center">
                                @if ($paquete->vuelo)
                                    Salida: {{ $paquete->vuelo->start_date }} - Llegada: {{ $paquete->vuelo->end_date }}
                                @endif
                            </div>
                            <div class="w-[85%] p-4">
                                <h1 class="text-2xl font-bold mt-3">{{ $paquete->nombre }}</h1>
                                <h2 class="text-sm mt-2">{{ $paquete->descripcion }}</h2>
                                <div class="flex items-center mt-2">
                                    <div class="bg-green-500 text-white px-2 py-1 rounded-lg">S/{{ $paquete->precio }}</div>
                                    <div class="ml-2">
                                        @for ($i = 1; $i <= 5; $i++)
                                            @if ($i <= $paquete->rating)
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 1l2.45 5.24L18 7.5l-4.5 4.45L15.11 19 10 15.66 4.89 19l1.61-7.05L2 7.5l5.55-.26L10 1z" clip-rule="evenodd" />
                                                </svg>
                                            @else
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 1l2.45 5.24L18 7.5l-4.5 4.45L15.11 19 10 15.66 4.89 19l1.61-7.05L2 7.5l5.55-.26L10 1z" clip-rule="evenodd" />
                                                </svg>
                                            @endif
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>

                <!-- Buscador -->
                <div class="flex flex-col items-center w-full md:w-[40%] mt-5 space-y-5">
                    <div class="w-[80%] bg-white rounded-lg p-4">
                        <h2 class="text-2xl font-bold mb-2">Planifica tu viaje</h2>
                        <p class="mb-4">¡Planifíca tu aventura! Encuentra vuelos, reserva, alojamiento y descubre actividades emocionantes. ¡Haz realidad tus sueños de viajar con nosotros!</p>
                        <form>
                            <input type="text" class="w-full p-2 border border-gray-300 rounded-lg mb-2" placeholder="Buscar tour">
                            <input type="text" class="w-full p-2 border border-gray-300 rounded-lg mb-2" placeholder="¿A dónde?">
                            <input type="date" class="w-full p-2 border border-gray-300 rounded-lg mb-2">
                            <div class="relative mt-2">
                                <label for="priceRange" class="text-2xl font-bold">Filtrar Precio</label>
                                <input type="range" min="12" max="3600" id="priceRange" class="slider w-full p-2 border border-gray-300 rounded-lg mt-2" oninput="updatePriceValue(this.value)">
                                <span class="absolute top-0 right-0 mt-2 text-sm" id="priceValue">Precio: $12 - $3600</span>
                            </div>
                            <script>
                                function updatePriceValue(val) {
                                    document.getElementById('priceValue').textContent = 'Precio: $' + val;
                                }
                            </script>
                            <div class="flex items-center justify-center mt-5">
                                <button class="w-[50%] p-2 bg-orange-500 hover:bg-gray-500 text-white rounded">Reservar ahora</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
