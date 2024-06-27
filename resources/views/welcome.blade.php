<x-app-layout>
    @push('styles')
        <style>
            .fixed-grid {
                display: grid;
                grid-template-columns: repeat(4, minmax(0, 1fr));
                gap: 1.5rem; /* Ajuste el espacio entre columnas si es necesario */
            }
            .cover-image {
                width: 100%;
                height: 200px; /* Ajusta esta altura según tus necesidades */
                object-fit: cover;
            }
        </style>
    @endpush
    <section id="principal">
    <div class="relative h-screen">
        <!-- Contenedor del imagen -->
        <div class="relative w-full h-full">
            <div class="relative w-screen h-screen">
                <img src="https://media.gq.com.mx/photos/60cf8f0a33c54bdef67610ee/16:9/w_2560%2Cc_limit/paisaje.jpg" alt="Visita Guiada" class="absolute top-0 left-0 w-full h-full object-cover opacity-75">
                <div class="absolute top-0 left-0 w-full h-full bg-black opacity-25"></div>
            </div>

            <!-- Contenido superpuesto -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center text-white">
                <h1 class="text-4xl md:text-6xl font-bold text-left mb-10 z-5 px-32 md:px-64">No importa a dónde vayas, te llevaremos allí.</h1>
                <form action="{{ route('trips.search') }}" method="GET">
                    <div class="bg-white bg-opacity-40 rounded-lg p-6 flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-4 z-10">
                        <input type="text" name="from" placeholder="¿De dónde?" class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                        <input type="text" name="to" placeholder="¿Hacia dónde?" class="p-2 rounded w-full md:w-auto text-black" style="color: black;">
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto">Buscar</button>
                    </div>
                </form>
                <!-- Información adicional debajo del formulario -->
                <div class="flex justify-center items-center mt-4">
                    <span span class="bg-black bg-opacity-50 py-2 px-4 rounded-lg pointer-events-auto">2,350 personas reservaron el evento formacional en las últimas 24 horas</span>
                </div>
            </div>
        </div>
    </div>
    </section>
    
    <!-- Sección de Servicios -->
    <section id="servicios" class="mt-12">
        <div class="container mx-auto py-12">
            <h5 class="font-bold text-center text-red-600">CATEGORIA</h5>
            <h2 class="text-3xl font-bold text-center mb-8">NUESTROS SERVICIOS</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/3284/3284622.png" alt="Visita Guiada" class="w-16 h-16">
                    </div>
                    <h3 class="text-xl text-center font-bold">Visitas guiadas</h3>
                    <p class="text-center text-gray-600">Contamos con una amplia selección de recorridos diseñados para brindarte una experiencia única y auténtica.</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-airplane-vector-icon-png-image_3757854.jpg" alt="Vuelos" class="w-16 h-16">
                    </div>
                    <h3 class="text-xl text-center font-bold">Las mejores opciones de vuelos</h3>
                    <p class="text-center text-gray-600">Trabajamos con las principales aerolíneas y agencias de viajes para garantizarte una experiencia de vuelo cómoda.</p>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <div class="flex justify-center items-center mb-4">
                        <img src="https://cdn-icons-png.freepik.com/512/4807/4807695.png" alt="Seguro Médico" class="w-16 h-16">
                    </div>
                    <h3 class="text-xl text-center font-bold">Seguro médico</h3>
                    <p class="text-center text-gray-600">La seguridad y el bienestar de nuestros viajeros son nuestra máxima prioridad. Por eso, te recomendamos contar con un seguro médico para tu viaje.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección frase llamativa -->
    <section class="mt-12">
        <div class="relative bg-gray-100 py-12">
            <div class="container mx-auto px-4">
                <div class="relative">
                    <img src="https://w7.pngwing.com/pngs/468/526/png-transparent-city-lights-neon-background-city-lights-poster-banner-photography.png" class="w-full h-full object-cover" alt="Fondo de portada">
                    <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
                        <h2 class="text-4xl font-bold text-center mb-8 text-white">Hagamos tus próximas vacaciones increíbles</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección creación de paquetes -->
    <section x-data="{ showModal: {{ $errors->any() ? 'true' : 'false' }} }">
        <div class="container mx-auto p-6">
            <div class="bg-white rounded-lg shadow-lg p-6">
                <div class="text-center mb-6">
                    <h1 class="text-3xl font-bold text-blue-900">Le ofrecemos los mejores recorridos turísticos por el Mundo</h1>
                    <p class="mt-4 text-gray-600">Nuestros servicios de turismo le brindan la oportunidad de explorar los destinos más fascinantes y emocionantes alrededor del mundo. Con una amplia gama de recorridos cuidadosamente diseñados, garantizamos experiencias inolvidables que le permitirán descubrir la riqueza cultural, histórica y natural de cada destino.</p>
                    <button @click="showModal = true" class="mt-4 px-6 py-2 bg-red-600 text-white rounded-full font-semibold hover:bg-red-700">Crea tu propio paquete</button>
                </div>
                <div class="flex flex-wrap -mx-3">
                    <div class="w-full md:w-2/3 px-3">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="relative">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/London_Big_Ben_Phone_box.jpg/800px-London_Big_Ben_Phone_box.jpg" alt="London" class="w-full h-48 object-cover rounded-lg">
                                <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 rounded-br-lg">$700</div>
                            </div>
                            <div class="relative">
                                <img src="https://i1.wp.com/goliveitblog.com/wp-content/uploads/2020/03/Istanbul-Bosphorus-Sunrise-miabid.jpg?fit=1024%2C1024&ssl=1" alt="Istanbul" class="w-full h-48 object-cover rounded-lg">
                                <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 rounded-br-lg">$800</div>
                            </div>
                            <div class="relative">
                                <img src="https://www.italia.it/content/dam/tdh/es/interests/lazio/roma/roma-in-48-ore/media/20220127150143-colosseo-roma-lazio-shutterstock-756032350.jpg" alt="Rome" class="w-full h-48 object-cover rounded-lg">
                                <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 rounded-br-lg">$500</div>
                            </div>
                            <div class="relative">
                                <img src="https://s7g10.scene7.com/is/image/stena/20150820_berlin-brandenburg-gate:16-9?ts=1688733511559&dpr=off" alt="Berlin" class="w-full h-48 object-cover rounded-lg">
                                <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 rounded-br-lg">$400</div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full md:w-1/3 px-3 mt-6 md:mt-0">
                        <div class="relative h-full">
                            <img src="https://res.cloudinary.com/dtljonz0f/image/upload/c_fill,w_3840,g_auto/f_auto/q_auto:eco/Paris-hp-banner_kzqphg?_a=BAVAEyBy0" alt="Paris" class="w-full h-full object-cover rounded-lg">
                            <div class="absolute top-0 left-0 bg-red-600 text-white px-3 py-1 rounded-br-lg">$600</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal -->
        <div x-show="showModal" class="fixed inset-0 flex items-center justify-center z-50">
            <div class="fixed inset-0 bg-black opacity-50" @click="showModal = false"></div>
            <div class="bg-white rounded-lg shadow-lg p-6 max-w-lg mx-auto z-50">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold">Información importante</h2>
                    <button @click="showModal = false" class="text-gray-500 hover:text-gray-700">&times;</button>
                </div>
                <p class="mb-4">Si quieres crear tu propio paquete, debes registrarte.</p>
                <div class="text-right">
                    <a href="{{ route('register') }}" class="mt-4 px-6 py-2 bg-red-600 text-white rounded-full font-semibold hover:bg-red-700">Registrarse</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección paquetes de moda -->
    <section class="mt-12">
    <div class="container mx-auto px-4 py-8">
        <h5 class="font-bold text-center text-red-600">DE MODA</h5>
        <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Nuestros paquetes turísticos de moda</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://prd-webrepository.firabarcelona.com/wp-content/uploads/sites/69/2023/06/19102025/como_descubrir-suiza-tren-istock-584784714.jpeg" alt="Suiza" class="w-full">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        
                        <div class="flex items-center">
                            <img src="https://flagcdn.com/w320/ch.png" alt="Switzerland Flag" class="w-6 h-6 rounded-full">
                            <span class="ml-2 font-bold text-gray-800">Suiza</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">8 Días</span>
                            <span class="mr-2">25 Personas Vendiendo</span>
                            <span class="text-xs font-bold">*****</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i>Europa</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-gray-800 text-lg">1,000 $</span>
                        <span class="text-gray-600 text-sm">1,200 $</span>
                    </div>
                    <p class="text-gray-600 text-sm">Suiza, el paraíso originario. Con sus impresionantes paisajes montañosos, lagos cristalinos y encantadores pueblos, te cautiva un destino que te deja sin aliento, nuttura de la esencia de la naturaleza en lo alto de sus alpes y disfrute maravillarte por las bellezas de Zurich, Ginebra y Lucerne. </p>
                    <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Explore ahora</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://img.freepik.com/fotos-premium/tucan-parque-nacional-iguazu-brasil_251764-43.jpg" alt="Amazonas" class="w-full">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <img src="https://flagcdn.com/w320/br.png" alt="Brazil Flag" class="w-6 h-6 rounded-full">
                            <span class="ml-2 font-bold text-gray-800">Amazonas</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">8 Días</span>
                            <span class="mr-2">30 Personas Vendiendo</span>
                            <span class="text-xs font-bold">*****</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i>Brasil</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-gray-800 text-lg">1,223 $</span>
                        <span class="text-gray-600 text-sm">1,200 $</span>
                    </div>
                    <p class="text-gray-600 text-sm">El Amazonas, un tesoro natural. Sumérgete en la selva más grande del mundo y descubre su biodiversidad único. Explora los ríos serpenteantes, maravilla con la exuberante vegetación y admira la fauna endémica, una experiencia inolvidable para los amantes de la naturaleza y lo aventura.</p>
                    <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Explore ahora</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="https://images.unsplash.com/photo-1506710507565-203b9f24669b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80" alt="Guiza" class="w-full">
                <div class="p-4">
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <img src="https://flagcdn.com/w320/eg.png" alt="Egypt Flag" class="w-6 h-6 rounded-full">
                            <span class="ml-2 font-bold text-gray-800">Guiza</span>
                        </div>
                        <div class="flex items-center">
                            <span class="mr-2">8 Días</span>
                            <span class="mr-2">155 Personas Vendiendo</span>
                            <span class="text-xs font-bold">*****</span>
                        </div>
                    </div>
                    <p class="text-gray-600 text-sm mb-4"><i class="fas fa-map-marker-alt mr-1"></i>Egipto</p>
                    <div class="flex justify-between items-center mb-2">
                        <span class="font-bold text-gray-800 text-lg">1,150 $</span>
                        <span class="text-gray-600 text-sm">1,200 $</span>
                    </div>
                    <p class="text-gray-600 text-sm">Guiza, donde la historia cobra vida. Visita los majestuosos Pirámides de Giza y la Gran Esfinge, este antiguo enclave te transportará a la era de los faraones. Descubre las maravillas arquitectónicas del Antiguo Egipto y descubre los secretos de una de las civilizaciones más fascinantes de la historia.</p>
                    <button class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto mt-4">Explore ahora</button>
                </div>
            </div>
        </div>
        <div class="mt-8 text-center mb-8">
        <a href="/paquetes" class="bg-red-600 hover:bg-red-700 text-white p-2 rounded w-full md:w-auto block md:inline-block text-center md:text-left">Explorar más tours</a>
        </div>
    </div>
    </section>
</x-app-layout>