<x-footer-only-layout>
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
            <div class="header mb-8">
                <h1 class="font-bold text-2xl md:text-3xl">Hoteles disponibles: {{ $hotels->count() }} resultados encontrados</h1>
            </div>
            
            <div class="main-content flex flex-col md:flex-row justify-between">
                <div class="filter-column w-full md:w-1/4 mb-8 md:mb-0 md:pr-4">
                    <form action="{{ route('hotels.index') }}" method="GET">
                        <div class="filter-box mb-4 bg-white rounded-lg shadow-md p-4">
                            <div class="filter-title font-bold mb-2">¿Cuál era tu destino?</div>
                            <div class="search-bar">
                                <input type="text" name="destination" value="{{ request('destination') }}" class="w-full border rounded p-2" placeholder="Buscar destino...">
                            </div>
                        </div>
                        
                        <div class="filter-box bg-white rounded-lg shadow-md p-4">
                            <div class="filter-title font-bold mb-4">Filtrar por</div>
                            <div class="filter-section mb-4">
                                <div class="filter-title font-semibold mb-2">Tu presupuesto por día</div>
                                <ul class="checkbox-list">
                                    <li class="flex justify-between mb-2">
                                        <input type="checkbox" id="budget1" name="min_price" value="0" class="mr-2" @if(request('min_price') == '0') checked @endif>
                                        <label for="budget1">$0 - $200</label>
                                    </li>
                                    <li class="flex justify-between mb-2">
                                        <input type="checkbox" id="budget2" name="min_price" value="200" class="mr-2" @if(request('min_price') == '200') checked @endif>
                                        <label for="budget2">$200 - $500</label>
                                    </li>
                                    <li class="flex justify-between mb-2">
                                        <input type="checkbox" id="budget3" name="min_price" value="500" class="mr-2" @if(request('min_price') == '500') checked @endif>
                                        <label for="budget3">$500 - $1,000</label>
                                    </li>
                                    <li class="flex justify-between mb-2">
                                        <input type="checkbox" id="budget4" name="min_price" value="1000" class="mr-2" @if(request('min_price') == '1000') checked @endif>
                                        <label for="budget4">$1,000 - $2,000</label>
                                    </li>
                                    <li class="flex justify-between mb-2">
                                        <input type="checkbox" id="budget5" name="min_price" value="2000" class="mr-2" @if(request('min_price') == '2000') checked @endif>
                                        <label for="budget5">$2,000 - $5,000</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="filter-box bg-white rounded-lg shadow-md p-4">
                            <div class="filter-title font-bold mb-4">Calificación</div>
                            <div class="filter-section mb-4">
                                <div class="star-rating flex">
                                    <!-- Aquí puedes mostrar las estrellas o cualquier otro filtro adicional -->
                                    <!-- Puedes implementar lógica de filtrado similar al de presupuesto -->
                                    <!-- Ejemplo: Filtrar por estrellas -->
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded">Aplicar filtros</button>
                    </form>
                </div>
                
                <div class="results-column w-full md:w-3/4 max-w-6xl mx-auto px-4 md:px-6 lg:px-8">
                    <div class="flex justify-between items-center mb-4">
                        <div class="tab-buttons flex">
                            <button class="tab-button active mr-2">Nuestras mejores opciones</button>
                            <button class="tab-button bg-white text-gray-700 px-4 py-2 rounded border border-gray-300">Hoteles y apartamentos</button>
                        </div>
                        <select id="sortDropdown" class="sort-dropdown border rounded p-2">
                            <option>Ordenar por: Recomendados</option>
                            <option value="asc">Precio: menor a mayor</option>
                            <option value="desc">Precio: mayor a menor</option>
                        </select>
                    </div>
                    
                    @foreach ($hotels as $hotel)
                    <div class="result-card mb-6 bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="flex">
                            <div class="w-1/3">
                                <img src="{{ $hotel->image_url }}" alt="{{ $hotel->description }}" class="w-full h-full object-cover">
                            </div>
                            <div class="w-2/3 p-4 flex flex-col justify-between">
                                <div>
                                    <h3 class="text-xl font-bold mb-2">{{ $hotel->description }}</h3>
                                    <p class="text-gray-600 mb-4">{{ Str::limit($hotel->description, 100) }}</p>
                                </div>
                                <div class="flex justify-between items-end">
                                    <button class="bg-red-600 text-white px-4 py-2 rounded">
                                        <a href="{{ route('hotels.rooms', $hotel) }}">Ver disponibilidad</a>
                                    </button>
                                    <div class="text-right">
                                        <div class="text-xl font-bold text-green-600">${{ number_format($hotel->price, 2) }}</div>
                                        <small class="text-gray-500">Incluye impuestos y tasas</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <script>
    document.getElementById('sortDropdown').addEventListener('change', function() {
        var selectedOption = this.value;
        
        // Construye la URL de la solicitud GET con el parámetro de ordenamiento
        var url = "{{ route('hotels.index') }}";
        if (selectedOption !== '') {
            url += '?sort=' + selectedOption;
        }

        console.log('URL generada:', url); // Verifica la URL generada en la consola del navegador
        
        // Realiza la solicitud GET al servidor
        fetch(url)
            .then(response => response.json())
            .then(data => {
                // Actualiza la lista de hoteles con los datos recibidos
                var resultsColumn = document.querySelector('.results-column');
                resultsColumn.innerHTML = ''; // Limpiar resultados existentes
                
                data.forEach(hotel => {
                    // Construye el HTML para cada resultado de hotel (similar al foreach original)
                    var resultCard = `
                        <div class="result-card mb-6 bg-white rounded-lg shadow-md overflow-hidden">
                            <!-- Estructura de cada tarjeta de hotel -->
                        </div>
                    `;
                    
                    resultsColumn.innerHTML += resultCard;
                });
            })
            .catch(error => console.error('Error al cargar hoteles:', error));
    });
</script>
</x-footer-only-layout>


