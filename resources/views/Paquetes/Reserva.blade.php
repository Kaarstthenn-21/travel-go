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
            <div class="flex justify-center h-[50px] w-full">
                <button class="tab-button px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" onclick="window.location='{{ route('reserva.tab', 'informacion') }}'">Informacion</button>
                <button class="tab-button px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" onclick="window.location='{{ route('reserva.tab', 'plan-viaje') }}'">Plan de viaje</button>
                <button class="tab-button px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" onclick="window.location='{{ route('reserva.tab', 'ubicacion') }}'">Ubicación</button>
                <button class="tab-button px-4 bg-gray-100 w-1/4 h-full flex items-center justify-center hover:bg-orange-500 hover:text-white border border-gray-300 z-10" onclick="window.location='{{ route('reserva.tab', 'galeria') }}'">Galería</button>
            </div>
            <!--Cuerpo-->
            <div class="flex justify-center bg-white space-x-[10px] w-full">   
                <div class="flex flex-wrap justify-center space-x-[10px] ml-10 w-[60%]">
                    <div class="tab-content" @if ($activeTab === 'informacion') style="display: block;" @endif class="flex flex-wrap justify-center space-x-10 w-[60%]" >
                    <!--informacion-->
                        <!--Estructura a la izquierda-->
                        <div class="flex flex-col items-center h-auto w-[90%] mt-5">
                        <!--descripcion-->
                            <div class="w-full">
                                <h1 class="text-4xl font-bold inline">Suiza</h1>
                                <h1 class="text-4xl text-orange-500 inline">1000$<span class="text-gray-300">/Por pareja</span></h1>
                            </div>

                        <!--caracteristicas-->
                            <div class="w-full mt-10">
                                <p >
                                ¡Descubre la belleza alpina de Suiza! Embárcate en un viaje lleno de vistas impresionantes, lagos cristalinos y encantadores pueblos. Explora los majestuosos Alpes suizos, disfruta de actividades al aire libre como el esquí y el senderismo, y sumérgete en la rica cultura y tradiciones suizas. Desde las ciudades cosmopolitas como Zurich y Ginebra hasta los encantadores pueblos de montaña como Zermatt y Lucerna, Suiza te cautivará con su encanto y su paisaje de cuento de hadas. ¡No te pierdas la oportunidad de vivir una experiencia inolvidable en este destino de ensueño!
                                </p>
                                <hr class="my-10 border-t border-gray-300">

                                <table class="table-auto w-full">
                                    <tbody>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">Destino</th>
                                            <td>Zurich, Suiza</td>
                                        </tr>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">Parada</th>
                                            <td>Plaza principal, Ciudad nueva</td>
                                        </tr>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">Hora de salida</th>
                                            <td>Aproximadamente 8:10 a.m.</td>
                                        </tr>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">Hora de regreso</th>
                                            <td>Aproximadamente 7:20 p.m.</td>
                                        </tr>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">Código de vestimenta</th>
                                            <td>Informal, cómodo y ligero</td>
                                        </tr>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">No incluye</th>
                                            <td>
                                                <table>
                                                    <tr><td>Entrada</td><td>Almuerzo</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="text-orange-500 font-bold text-left">Incluido</th>
                                            <td>
                                                <table>
                                                    <tr><td>Alojamiento 5 estrellas</td><td>Transferencia de aeropuerto</td></tr>
                                                    <tr><td>Desayuno</td><td>Guía personal</td></tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>                    

                <!--Plan de viaje-->
                    <div class="tab-content" @if ($activeTab === 'plan-viaje') style="display: block;" @endif>
                        <div class="flex items-center space-x-4 mt-10">
                            <div class="bg-[#F05A22] text-white rounded-lg w-10 h-10 flex items-center justify-center font-bold mr-10">
                                01
                            </div>
                            <h2 class="text-xl font-bold">Día 1: Salida</h2>
                        </div>

                        <div class="ml-24 mt-4">
                            <p>Qui Tempore Voluptate Qui Quia Commodi Rem Praesentium Alias Et Voluptates Officia Sed Molestiae Sint Et Voluptas Quos. Qui Harum Repudiandae Qalisun Dolorem</p>
                            <ul class="mt-4 space-y-2">
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Desayuno</li>
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Almuerzo</li>
                            </ul>
                        </div>

                        <div class="flex items-center space-x-4 mt-10">
                            <div class="bg-[#F05A22] text-white rounded-lg w-10 h-10 flex items-center justify-center font-bold mr-10">
                                02
                            </div>
                            <h2 class="text-xl font-bold">Día 2: Visitando Zurich, Ginebra Y Zermatt</h2>
                        </div>

                        <div class="ml-24 mt-4">
                            <p>Donec Quam Felis, Ultricies Nec, Pellentesque Eu, Pretium Quis, Sem. Nulla Consequat Massa Quis Enim. Donec Pede Justo, Fringilla Vel, Aliquet Nec, Vulputate Eget, Arcu. In Enim Justo, Rhoncus Ut, Imperdiet.</p>
                            <ul class="mt-4 space-y-2">
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Desayuno</li>
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Almuerzo</li> 
                            </ul>
                        </div>
                        
                        <div class="flex items-center space-x-4 mt-10">
                            <div class="bg-[#F05A22] text-white rounded-lg w-10 h-10 flex items-center justify-center font-bold mr-10">
                                03
                            </div>
                            <h2 class="text-xl font-bold">Día 2: Visitando Zurich, Ginebra Y Zermatt</h2>
                        </div>

                        <div class="ml-24 mt-4">
                            <p>Donec Quam Felis, Ultricies Nec, Pellentesque Eu, Pretium Quis, Sem. Nulla Consequat Massa Quis Enim. Donec Pede Justo, Fringilla Vel, Aliquet Nec, Vulputate Eget, Arcu. In Enim Justo, Rhoncus Ut, Imperdiet.</p>
                            <ul class="mt-4 space-y-2">
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Desayuno</li>
                            </ul>
                        </div>

                        <div class="flex items-center space-x-4 mt-10">
                            <div class="bg-[#F05A22] text-white rounded-lg w-10 h-10 flex items-center justify-center font-bold mr-10">
                                02
                            </div>
                            <h2 class="text-xl font-bold">Día 2: Visitando Zurich, Ginebra Y Zermatt</h2>
                        </div>

                        <div class="ml-24 mt-4">
                            <p>Donec Quam Felis, Ultricies Nec, Pellentesque Eu, Pretium Quis, Sem. Nulla Consequat Massa Quis Enim. Donec Pede Justo, Fringilla Vel, Aliquet Nec, Vulputate Eget, Arcu. In Enim Justo, Rhoncus Ut, Imperdiet.</p>
                            <ul class="mt-4 space-y-2">
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Desayuno</li>
                                <li>• Alojamiento De 5 Estrellas</li>
                                <li>• Almuerzo</li> 
                            </ul>
                        </div>

                        <div class="flex items-center space-x-4 mt-10">
                            <div class="bg-[#F05A22] text-white rounded-lg w-10 h-10 flex items-center justify-center font-bold mr-10">
                                02
                            </div>
                            <h2 class="text-xl font-bold">Día 2: Visitando Zurich, Ginebra Y Zermatt</h2>
                        </div>

                        <div class="ml-24 mt-4">
                            <p>Donec Quam Felis, Ultricies Nec, Pellentesque Eu, Pretium Quis, Sem. Nulla Consequat Massa Quis Enim. Donec Pede Justo, Fringilla Vel, Aliquet Nec, Vulputate Eget, Arcu. In Enim Justo, Rhoncus Ut, Imperdiet.</p>
                        </div>

                    </div>
                <!--Ubicacion-->
                    <div class="tab-content" @if ($activeTab === 'ubicacion') style="display: block;" @endif>
                        <div class="flex flex-col items-center h-auto w-[90%] mt-5">
                            <h1 class="text-4xl font-bold">Ubicación</h1>
                            <p class="mt-10">Suiza es un país situado en el corazón de Europa, conocido por sus impresionantes paisajes alpinos, sus lagos cristalinos y sus encantadores pueblos. El país limita con Francia, Alemania, Italia, Austria y Liechtenstein, y es conocido por su neutralidad política y su rica historia cultural. La capital de Suiza es Berna, pero las ciudades más grandes y conocidas son Zurich y Ginebra. Suiza es un destino popular para los amantes de la naturaleza, los entusiastas de los deportes de invierno y los aficionados a la cultura y la historia. ¡Descubre la belleza y el encanto de Suiza en tu próximo viaje!</p>
                            <div class="w-full  mt-10 mb-10">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2691.073682073073!2d8.54169431561763!3d47.37688657916984!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e3f3f244f3b3d%3A0x41f6f6f6b8c1f1c!2sZurich%2C%20Suiza!5e0!3m2!1ses!2spe!4v1632213660734!5m2!1ses!2spe" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div>
                <!--Galeria-->
                    <div class="tab-content" @if ($activeTab === 'galeria') style="display: block;" @endif>
                        <!--galerias-->
                        <div class="w-full mt-10">
                                <h1 class="text-4xl font-bold col-span-2">De nuestra Galería</h1> 
                                <p class="mt-10">Suiza es conocida por su belleza alpina, sus paisajes impresionantes y su encanto pintoresco. El país se encuentra en el corazón de Europa y está rodeado de majestuosas montañas, lagos cristalinos y verdes prados.</p>   
                                <div class="w-[80%] grid grid-cols-2 gap-4 mt-10 mx-auto">
                                    <div class="flex justify-center">
                                        <img src="{{asset('images/suiza1.jpg')}}" alt="Imagen de suiza1" class="w-[250px] h-[250px] object-cover">
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="{{asset('images/suiza2.jpg')}}" alt="Imagen de suiza2" class="w-[250px] h-[250px] object-cover">
                                    </div>
                                    <div class="flex justify-center">
                                        <img src="{{asset('images/suiza3.jpg')}}" alt="Imagen de suiza3" class="w-[250px] h-[250px] object-cover">
                                    </div>
                                </div>
                            </div>
                    </div>

                </div> 
                <!--Catalogo de viajes-->

                <!--estructura a la derecha-->
                <div class="flex flex-wrap justify-center space-x-[10px] w-[40%]">
                    <div class="flex flex-col items-center h-[1050px] w-[80%] bg-gray-200 mt-5">
                        <!-- Aquí es donde irá el buscador -->
                        <div class="w-full p-4 ">
                            <h2 class="mt-10 text-center text-4xl font-bold mb-2" style="font-family:'Carattere'">Reserva de tour</h2>
                            <p class="mb-6 mt-5 text-center texts">¡Reserva ahora y no te lo pierdas! Completa el formulario para asegurar tu lugar en esta increíble experiencia de exploración y descubrimiento.</p>
                            <form class="flex justify-center flex-wrap">
                                <input type="text" class="w-[80%] h-20 p-2 border border-gray-300 mb-2" placeholder="Nombre">
                                <input type="email" class="w-[80%] h-20 p-2 border border-gray-300 mb-2" placeholder="Email">
                                <input type="text" class="w-[80%] h-20 p-2 border border-gray-300 mb-2" placeholder="DNI">
                                <input type="text" class="w-[80%] h-20 p-2 border border-gray-300 mb-2" placeholder="Teléfono">
                                <input type="date" class="w-[80%] h-20 p-2 border border-gray-300 mb-2">
                                <input type="text" class="w-[80%] h-20 p-2 border border-gray-300 mb-2" placeholder="Número de boleto">
                                <textarea class="w-[80%] h-20 p-2 border border-gray-300 sm:rounded-lg mb-2" placeholder="Mensaje"></textarea>

                                <div class="flex items-center justify-center mt-10 h-full">
                                    <div class="flex flex-col space-y-4">
                                        <button class="w-full p-2 bg-orange-500 hover:bg-gray-500 text-white rounded">Consultar disponibilidad</button>
                                        <button class="w-full p-2 bg-orange-500 hover:bg-gray-500 text-white rounded">Reservar ahora</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-10 border-t border-gray-300">
        </div>
    </div>
</x-app-layout>