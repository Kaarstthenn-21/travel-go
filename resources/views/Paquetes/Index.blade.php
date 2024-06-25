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
            <div class="flex justify-center bg-gray-100 h-[50px]">
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Fecha</button>
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Precio Mayor</button>
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Precio Menor</button>
                <button class="px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10">Nombre (A-Z)</button>
            </div>

            <!-- Cuerpo -->
            <div class="flex flex-wrap justify-center bg-gray-100">
                <!-- Catalogo de viajes -->
                <div class="flex flex-wrap justify-center w-full md:w-[60%] mt-5 space-x-4">
                    @for ($i = 0; $i < 4; $i++)<!--reeplazar esto con un foeach cuando haya la base de datos-->
                    <a class="flex flex-col items-center w-[40%] md:w-[48%] lg:w-[32%] mb-8" href="{{ route('Paquetes.reserva') }}">
                        <div class="flex flex-col items-center w-full bg-white rounded-lg transform transition duration-500 ease-in-out hover:scale-105 hover:shadow-lg">
                            <img src="{{ asset('images/paisajePrueba.jpg') }}" alt="Paisaje de prueba" class="w-full h-48 object-cover rounded-t-lg">
                            <div class="w-[85%] p-4">
                                <h1 class="text-4xl font-bold mt-3">Suiza</h1>
                                <h2 class="text-sm mt-2">Descubre la Belleza Alpina de Suiza Con Impresionantes Paisajes Montañosos y Encantadores Pueblos</h2>
                                <h3 class="text-sm mt-2">1,100$</h3>
                                <h3 class="text-sm mt-2">★★★★☆</h3>
                            </div>
                        </div>
                    </a>
                    @endfor
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
