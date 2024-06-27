<x-app-layout>
<section class="mt-16">
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de búsqueda</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="font-bold text-center text-red-600">{{ $from }} a {{ $to }}: {{ $trips->count() }} resultados encontrados</h1>
        </div>
        
        <div class="main-content">
            <div class="filter-column">
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
            
            <div class="results-column">
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
                <div class="result-card">
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
</body>
</html>
</section>
</x-app-layout>