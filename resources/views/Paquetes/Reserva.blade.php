<x-app-layout>
    <div class="relative h-auto">
        <!-- Contenedor de la imagen -->
        <div class="relative h-auto">
            <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" width="100%" height="100%">
            
            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                <div class="text-sm font-bold" >Explorar</div>
                <div class="text-8xl font-bold" style="font-family: 'Carattere'">Paisaje</div>
            </div>
        </div>
        
        <!-- Contenedor de cuerpo -->
        <div class="w-2/3 mx-auto mt-[-50px] mb-10 shadow-lg" >
            <!-- Pestañas -->
            <div class="flex justify-center h-[100px] w-full">
                <button class="tab-button text-2xl font-bold px-4 bg-gray-100 w-1/3 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" 
                onclick="window.location='{{ route('Paquetes.showTab', ['id' => $paquete->id, 'tab' => 'informacion']) }}'">Información</button>
                <button class="tab-button text-2xl font-bold px-4 bg-gray-100 w-1/3 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" 
                onclick="window.location='{{ route('Paquetes.showTab', ['id' => $paquete->id, 'tab' => 'vuelo']) }}'">Plan de viaje</button>
                <button class="tab-button text-2xl font-bold px-4 bg-gray-100 w-1/3 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" 
                onclick="window.location='{{ route('Paquetes.showTab', ['id' => $paquete->id, 'tab' => 'hotel']) }}'">Ubicación</button>
            </div>
            <!--Cuerpo-->
            <div class=" mt-4 w-full h-[500px]">
            @if ($activeTab === 'informacion')
                <div class="flex justify-between border border-gray-300 rounded-lg p-4">
                    <div class="w-1/2">
                        <div class="flex items-center justify-between pr-3">
                            <h1 class="text-3xl font-bold"> {{ $paquete->nombre }} </h1><p class=" text-4xl text-green-500 font-bold">S/{{ $paquete->precio }}</p>
                        </div>
                        <p class="mt-2"> {{ $paquete->descripcion }} </p>
                        <div class="w-full text-right">
                            <div class="mt-2">
                                @for ($i = 1; $i <= $paquete->rating; $i++)
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 inline-block" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 1l2.45 5.24L18 7.5l-4.5 4.45L15.11 19 10 15.66 4.89 19l1.61-7.05L2 7.5l5.55-.26L10 1z" clip-rule="evenodd" />
                                    </svg>
                                @endfor
                            </div>
                            <table>
                                <tr>
                                    <th> Viaje incluido
                                        <td>si</td>
                                    </th>
                                </tr>
                                <tr>
                                    <th> Hotel incluido
                                        <td>si</td>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="w-1/2">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCVYk_ZdjOviMt9YFiLlMd-h7yHzYzakEhLw&s" alt="Imagen del hotel" class="w-full h-auto object-cover rounded-lg">
                    </div>
                </div>
                <button class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded">Adquirir Paquete</button>   
            @elseif ($activeTab === 'vuelo')
                <h1>Vuelo</h1>
                <p>Aerolinea: {{ $paquete->vuelo->aerolinea }}</p>
                <p>Fecha de salida: {{ $paquete->vuelo->start_date->toFormattedDateString() }}</p>
                <p>Fecha de llegada: {{ $paquete->vuelo->end_date->toFormattedDateString() }}</p>
                <p>Días de duración del vuelo: 1 hora</p>
            @elseif ($activeTab === 'hotel')
                <h1>Hotel</h1>
                <p>Nombre: {{ $paquete->hotel->nombre }}</p>
                <p>Dirección: {{ $paquete->hotel->direccion }}</p>
            @endif
            </div>
        </div>
    </div>
</x-app-layout>