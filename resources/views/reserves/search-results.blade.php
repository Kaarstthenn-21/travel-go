<x-app-layout>
    <section class="mt-20">
        <div class="container mx-auto px-4 py-8 bg-gray-100">
            <div class="header mb-8">
                <h1 class="font-bold text-2xl md:text-3xl">{{ $from }} a {{ $to }}: {{ $trips->count() }} resultados encontrados</h1>
            </div>

            <div class="main-content flex flex-col md:flex-row justify-between gap-6">
                <!-- Columna de filtros -->
                <div class="filter-column w-full md:w-1/4 mb-8 md:mb-0 md:pr-4">
                    <div class="filter-box mb-4 bg-white rounded-lg shadow-md p-4">
                        <div class="filter-title font-bold mb-2">¿Cuál era tu destino?</div>
                        <div class="search-bar">
                            <input type="text" class="w-full border border-gray-300 rounded p-2 focus:outline-none focus:border-red-500" placeholder="Busca...">
                        </div>
                    </div>
                    <div class="filter-box bg-white rounded-lg shadow-md p-4">
                        <div class="filter-title font-bold mb-4">Filtrar por</div>
                        <div class="filter-section mb-4">
                            <div class="filter-title font-semibold mb-2">Tu presupuesto por día</div>
                            <ul class="checkbox-list">
                                @foreach ([
                                    '0 - 200' => 200, 
                                    '200 - 500' => 100, 
                                    '500 - 1,000' => 15, 
                                    '1,000 - 2,000' => 12, 
                                    '2,000 - 5,000' => 230
                                ] as $range => $count)
                                    <li class="flex justify-between mb-2">
                                        <div>
                                            <input type="checkbox" id="budget{{ $loop->index }}" class="mr-2">
                                            <label for="budget{{ $loop->index }}">${{ $range }}</label>
                                        </div>
                                        <span class="text-gray-500">{{ $count }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="filter-section">
                            <div class="filter-title font-semibold mb-2">Calificación</div>
                            <div class="star-rating flex">
                                @for ($i = 1; $i <= 5; $i++)
                                    <span class="star mr-1 bg-gray-200 px-2 py-1 rounded cursor-pointer hover:bg-yellow-400">{{ $i }} ⭐</span>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Columna de resultados -->
                <div class="results-column w-full md:w-3/4 max-w-6xl mx-auto px-4 md:px-6 lg:px-8">
                    <div class="flex justify-between items-center mb-4">
                        <div class="tab-buttons flex">
                            <button class="mr-2 bg-red-600 text-white px-4 py-2 rounded">Nuestras mejores opciones</button>
                            <button class="tab-button bg-white text-gray-700 px-4 py-2 rounded border border-gray-300">Hoteles y apartamentos</button>
                        </div>
                        <select class="sort-dropdown border border-gray-300 rounded p-2">
                            <option>Ordenar por: Recomendados</option>
                            <option>Precio: menor a mayor</option>
                            <option>Precio: mayor a menor</option>
                            <option>Calificación</option>
                        </select>
                    </div>
                    @foreach ($trips as $trip)
                    <div class="result-card mb-6 bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="flex">
                            <div class="w-full md:w-1/3">
                                <img src="{{ $trip->image_url }}" alt="{{ $trip->description }}" class="w-full h-full object-cover">
                            </div>
                            <div class="w-full md:w-2/3 p-4 flex flex-col justify-between">
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
    </section>
</x-app-layout>
