{{-- Cambiamos a componente
<x-footer-only-layout>
    <div class="container" style="background-color: rgba(242, 239, 239, 0.8);">
        <div class="header">
            <h1 class="font-bold text-3xl text-red-600 pr-4">{{ $from }} a {{ $to }}: {{ $trips->count() }} resultados encontrados</h1>
        </div>
        
        <div class="main-content flex flex-row justify-between">
            <div class="filter-column w-1/4 pl-4">
                <div class="filter-box">
                    <div class="filter-title">¿Cual era tu destino?</div>
                    <div class="search-bar">
                        <input type="text" class="search-input" placeholder="Busca...">
                    </div>
                </div>
                
                <div class="filter-box">
                    <div class="filter-title">Filtrar por</div>
                    <div class="filter-section">
                        <div class="filter-title">Tu presupuesto por día</div>
                        <ul class="checkbox-list">
                            <li><input type="checkbox" id="budget1"> <label for="budget1">$0 - $200</label> <span>200</span></li>
                            <li><input type="checkbox" id="budget2"> <label for="budget2">$200 - $500</label> <span>100</span></li>
                            <li><input type="checkbox" id="budget3"> <label for="budget3">$500 - $1,000</label> <span>15</span></li>
                            <li><input type="checkbox" id="budget4"> <label for="budget4">$1,000 - $2,000</label> <span>12</span></li>
                            <li><input type="checkbox" id="budget5"> <label for="budget5">$2,000 - $5,000</label> <span>230</span></li>
                        </ul>
                    </div>
                    <div class="filter-section">
                        <div class="filter-title">Calificación</div>
                        <div class="star-rating">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star">{{ $i }} ⭐</span>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="results-column w-3/4">
                <div class="tab-buttons">
                    <button class="tab-button active">Nuestras mejores opciones</button>
                    <button class="tab-button">Hoteles y apartamentos</button>
                    <button class="tab-button">Residencias</button>
                    <button class="tab-button">Resort</button>
                    <button class="tab-button">Espacios compartidos</button>
                </div>
                
                <div style="text-align: right; margin-bottom: 20px;">
                    <select class="sort-dropdown">
                        <option>Ordenar por: Recomendados</option>
                        <option>Precio: menor a mayor</option>
                        <option>Precio: mayor a menor</option>
                        <option>Calificación</option>
                    </select>
                </div>
                
                @foreach ($trips as $trip)
                <div class="result-card" style="max-width: 90%; max-height: 200px; overflow: hidden;">
                    <img src="{{ $trip->image_url }}" alt="{{ $trip->description }}" class="result-image">
                    <div class="result-details">
                        <div>
                            <div class="result-title">{{ $trip->description }}</div>
                            <div class="result-rating">⭐⭐⭐⭐⭐ 4.5 (1200 Reseñas)</div>
                            <div class="result-description">
                                {{ Str::limit($trip->description, 100) }}
                            </div>
                        </div>
                        <div style="display: flex; justify-content: space-between; align-items: flex-end;">
                            <button class="availability-button-red">Ver disponibilidad</button>
                            <div style="text-align: right;">
                                <div class="result-price">${{ number_format($trip->price, 2) }}</div>
                                <small>Incluye impuestos y tasas</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-footer-only-layout>  --}}


{{-- <x-footer-only-layout>
    <div class="container mx-auto px-4 py-8">
        <div class="header mb-8">
            <h1 class="font-bold text-2xl md:text-3xl">{{ $from }} a {{ $to }}: {{ $trips->count() }} resultados encontrados</h1>
        </div>
        
        <div class="main-content flex flex-col md:flex-row justify-between">
            <div class="filter-column w-full md:w-1/4 mb-8 md:mb-0 md:pr-4">
                <div class="filter-box mb-4">
                    <div class="filter-title font-bold mb-2">¿Cual era tu destino?</div>
                    <div class="search-bar">
                        <input type="text" class="w-full border rounded p-2" placeholder="Busca...">
                    </div>
                </div>
                
                <div class="filter-box">
                    <div class="filter-title font-bold mb-4">Filtrar por</div>
                    <div class="filter-section mb-4">
                        <div class="filter-title font-semibold mb-2">Tu presupuesto por día</div>
                        <ul class="checkbox-list">
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget1" class="mr-2"> <label for="budget1">$0 - $200</label></div>
                                <span>200</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget2" class="mr-2"> <label for="budget2">$200 - $500</label></div>
                                <span>100</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget3" class="mr-2"> <label for="budget3">$500 - $1,000</label></div>
                                <span>15</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget4" class="mr-2"> <label for="budget4">$1,000 - $2,000</label></div>
                                <span>12</span>
                            </li>
                            <li class="flex justify-between mb-2">
                                <div><input type="checkbox" id="budget5" class="mr-2"> <label for="budget5">$2,000 - $5,000</label></div>
                                <span>230</span>
                            </li>
                        </ul>
                    </div>
                    <div class="filter-section">
                        <div class="filter-title font-semibold mb-2">Calificación</div>
                        <div class="star-rating flex">
                            @for ($i = 1; $i <= 5; $i++)
                                <span class="star mr-1">{{ $i }} ⭐</span>
                            @endfor
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="results-column w-full md:w-3/4">
                <div class="flex justify-between items-center mb-4">
                    <div class="tab-buttons flex flex-wrap">
                        <button class="tab-button active mr-2 mb-2">Nuestras mejores opciones</button>
                        <button class="tab-button mr-2 mb-2">Hoteles y apartamentos</button>
                        <button class="tab-button mr-2 mb-2">Residencias</button>
                        <button class="tab-button mr-2 mb-2">Resort</button>
                        <button class="tab-button mb-2">Espacios compartidos</button>
                    </div>
                    <div>
                        <select class="sort-dropdown border rounded p-2">
                            <option>Ordenar por: Recomendados</option>
                            <option>Precio: menor a mayor</option>
                            <option>Precio: mayor a menor</option>
                            <option>Calificación</option>
                        </select>
                    </div>
                </div>
                
                @foreach ($trips as $trip)
                <div class="result-card mb-6">
                    <div class="flex flex-col md:flex-row">
                        <img src="{{ $trip->image_url }}" alt="{{ $trip->description }}" class="w-full md:w-1/3 h-48 object-cover">
                        <div class="result-details p-4 flex flex-col justify-between w-full md:w-2/3">
                            <div>
                                <div class="result-title text-xl font-bold mb-2">{{ $trip->description }}</div>
                                <div class="result-rating mb-2">⭐⭐⭐⭐⭐ 4.5 (1200 Reseñas)</div>
                                <div class="result-description mb-4">
                                    {{ Str::limit($trip->description, 100) }}
                                </div>
                            </div>
                            <div class="flex justify-between items-end">
                                <button class="availability-button-red px-4 py-2 bg-red-600 text-white rounded">Ver disponibilidad</button>
                                <div class="text-right">
                                    <div class="result-price text-xl font-bold">${{ number_format($trip->price, 2) }}</div>
                                    <small>Incluye impuestos y tasas</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-footer-only-layout> --}}



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
                                <button class="bg-red-600 text-white px-4 py-2 rounded">Ver disponibilidad</button>
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