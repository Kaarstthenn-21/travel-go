{{-- Codigo redundante borrar lo de arriba,abajo no --}}

<x-footer-only-layout>
    <div class="container mx-auto px-4 py-8 bg-gray-100">
        <div class="header mb-8">
            <h1 class="font-bold text-2xl md:text-3xl">{{ $from }} a {{ $to }}: {{ $trips->count() }} resultados encontrados</h1>
        </div>
        
        <div class="main-content flex flex-col md:flex-row justify-between">
            <!-- Columna de filtros -->
            <div class="filter-column w-full md:w-1/4 mb-8 md:mb-0 md:pr-4">
                <div class="filter-box mb-4 bg-white rounded-lg shadow-md p-4">
                    <div class="filter-title font-bold mb-2">¿Cual era tu destino?</div>
                    <div class="search-bar">
                        <input type="text" class="w-full border rounded p-2" placeholder="Busca...">
                    </div>
                </div>
                
                <div class="filter-box bg-white rounded-lg shadow-md p-4">
                    <div class="filter-title font-bold mb-4">Filtrar por</div>
                    <div class="filter-section mb-4">
                        <div class="filter-title font-semibold mb-2">Tu presupuesto por día</div>
                        <ul class="checkbox-list">
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget1" class="mr-2"> <label for="budget1">$0 - $200</label></div>
                                <span class="text-gray-500">200</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget2" class="mr-2"> <label for="budget2">$200 - $500</label></div>
                                <span class="text-gray-500">100</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget3" class="mr-2"> <label for="budget3">$500 - $1,000</label></div>
                                <span class="text-gray-500">15</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget4" class="mr-2"> <label for="budget4">$1,000 - $2,000</label></div>
                                <span class="text-gray-500">12</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget5" class="mr-2"> <label for="budget5">$2,000 - $5,000</label></div>
                                <span class="text-gray-500">230</span>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-section">
                        <div class="filter-title font-semibold mb-2">Calificación</div>
                        <div class="star-rating flex">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star mr-1 bg-gray-200 px-2 py-1 rounded">{{ $i }} ⭐</span>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Columna de resultados -->
            <div class="results-column w-full md:w-3/4 max-w-6xl mx-auto px-4 md:px-6 lg:px-8">
                <div class="flex justify-between items-center mb-4">
                    <div class="tab-buttons flex">
                        <button class="tab-button active mr-2">Nuestras mejores opciones</button>
                        <button class="tab-button bg-white text-gray-700 px-4 py-2 rounded border border-gray-300">Hoteles y apartamentos</button>
                    </div>
                    <select class="sort-dropdown border rounded p-2">
                        <option>Ordenar por: Recomendados</option>
                        <option>Precio: menor a mayor</option>
                        <option>Precio: mayor a menor</option>
                        <option>Calificación</option>
                    </select>
                </div>
                @foreach ($trips as $trip)
                <div class="result-card mb-6 bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="flex">
                        <div class="w-1/3">
                            <img src="{{ $trip->image_url }}" alt="{{ $trip->description }}" class="w-full h-full object-cover">
                        </div>
                        <div class="w-2/3 p-4 flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold mb-2">{{ $trip->description }}</h3>
                                <div class="flex items-center mb-2">
                                    <span class="text-yellow-400">★★★★★</span>
                                    <span class="text-gray-600 ml-2">4.5 (1200 Reseñas)</span>
                                </div>
                                <p class="text-gray-600 mb-4">{{ Str::limit($trip->description, 100) }}</p>
                            </div>
                            <div class="flex justify-between items-end">
                                <a href="{{ route('trips.show', $trip->id) }}">
                                    <button class="bg-red-600 text-white px-4 py-2 rounded">Ver disponibilidad</button>
                                </a>                              
                                <div class="text-right">
                                    <div class="text-xl font-bold text-green-600">${{ number_format($trip->price, 2) }}</div>
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
</x-footer-only-layout>