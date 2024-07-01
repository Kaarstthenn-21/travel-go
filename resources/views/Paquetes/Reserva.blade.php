<x-app-layout>
    <div class="relative h-auto">
        <!-- Contenedor de la imagen -->
        <div class="relative h-auto">
            <img src="{{ asset('images/paisaje2.jpg') }}" alt="Paisaje" width="100%" height="100%">
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center">
                <!-- Contenedor de cuerpo -->
                <div class="w-2/3 mx-auto mt-[-50px] mt-10 mb-10 shadow-lg" >
                    <!-- Pestañas -->
                    <div class="flex justify-center h-[100px] w-full">
                        <button class="tab-button text-2xl font-bold px-4 bg-gray-100 w-1/3 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 rounded-tl-[15px]" 
                        onclick="window.location='{{ route('Paquetes.showTab', ['id' => $paquete->id, 'tab' => 'informacion']) }}'">Información</button>
                        <button class="tab-button text-2xl font-bold px-4 bg-gray-100 w-1/3 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" 
                        onclick="window.location='{{ route('Paquetes.showTab', ['id' => $paquete->id, 'tab' => 'vuelo']) }}'">Plan de viaje</button>
                        <button class="tab-button text-2xl font-bold px-4 bg-gray-100 w-1/3 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10 rounded-tr-[15px]" 
                        onclick="window.location='{{ route('Paquetes.showTab', ['id' => $paquete->id, 'tab' => 'hotel']) }}'">Ubicación</button>
                    </div>
                    <!--Cuerpo-->
                    <div class=" w-full h-[460px] bg-white rounded-b-[15px]">
                    @if ($activeTab === 'informacion')
                        <div class="flex justify-between border border-gray-300 rounded-lg p-4">
                            <div class="w-1/2">
                                <div class="flex items-center justify-between pr-3">
                                    <h1 class="text-3xl font-bold"> {{ $paquete->nombre }} </h1><p class=" text-4xl text-green-500 font-bold">S/{{ $paquete->precio }}</p>
                                </div>
                                <div class="text-[18px] text-right mr-10">                      
                                    @for ($i = 1; $i <= $paquete->rating; $i++)
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                    @endfor
                                </div>                        
                                <p class="text-[20px] mt-8"> {{ $paquete->descripcion }} </p>
                                <table class="mt-10">
                                    <tr>
                                        <th class="text-[20px]"> Viaje incluido
                                            <td><i class="fa-solid fa-check text-[20px] font-bold text-blue-600"></i></td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-[20px]"> Hotel incluido
                                            <td><i class="fa-solid fa-check text-[20px] font-bold text-blue-600"></i></td>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <div class="w-1/2">
                                <img src="{{$paquete->imagen}}" alt="Imagen del hotel" class="w-full h-[350px] object-cover rounded-lg">
                            </div>
                        </div>
                        <button class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded">Adquirir Paquete</button>   
                    @elseif ($activeTab === 'vuelo')
                    <div class="flex justify-between border border-gray-300 rounded-lg p-4">
                            <div class="w-1/2 p-5">
                                <h1 class="text-4xl text-right font-bold"> De {{ $paquete->vuelo->from }} a {{ $paquete->vuelo->to }}</h1>                       
                                <p class="text-[20px] text-right mt-8"> {{ $paquete->vuelo->description }} </p>
                                <table class="mt-10 ml-auto">
                                    <tr>
                                        <th class="text-[20px]"> Fecha de salida:
                                            <td>{{ $paquete->vuelo->start_date->toFormattedDateString() }}</i></td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="text-[20px]"> Fecha de llegada:
                                            <td>{{ $paquete->vuelo->end_date->toFormattedDateString() }}</i></td>
                                        </th>
                                    </tr>
                                </table>
                            </div>
                            <div class="w-1/2">
                                <img src="{{$paquete->imagen}}" alt="Imagen del hotel" class="w-full h-[350px] object-cover rounded-lg">
                            </div>
                        </div>
                        <button class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded">Adquirir Paquete</button> 
                    @elseif ($activeTab === 'hotel')
                    <div class="flex justify-between border border-gray-300 rounded-lg p-4">
                            <div class="w-1/2 p-5">
                                <h1 class="text-4xl font-bold"> {{ $paquete->hotel->name }} </h1>
                                <p>
                                    @for ($i = 1; $i <= 4; $i++)
                                        <i class="fa-solid fa-star text-yellow-400"></i>
                                    @endfor
                                </p>                    
                                <p class="text-[20px] mt-8"> {{ $paquete->hotel->description }} </p>
                                <p class="mt-5">Av de Hotel</p>
                                <p class="text-2xl text-green-500 mt-5">S/{{ $paquete->vuelo->price }}</p>
                                </table>
                            </div>
                            <div class="w-1/2">
                                <img src="{{$paquete->imagen}}" alt="Imagen del hotel" class="w-full  h-[350px] object-cover rounded-lg">
                            </div>
                        </div>
                        <button class="mt-4 bg-blue-500 text-white font-bold py-2 px-4 rounded">Adquirir Paquete</button> 
                    @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>