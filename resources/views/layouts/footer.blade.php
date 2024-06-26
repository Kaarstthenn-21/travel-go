<section id="acerca">
    <footer class="bg-white py-8 mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row justify-between items-start">
                <div class="mb-6 md:mb-0">
                    <a href="{{ url('/') }}">
                        <img class="h-16 w-auto" src="{{ asset('images/icono5.ico') }}" alt="TravelGo">
                    </a>
                    <p class="mt-2 text-gray-600">Travel ayuda a las empresas a gestionar los pagos fácilmente.</p>
                </div>
                <div class="flex flex-col md:flex-row space-y-8 md:space-y-0 md:space-x-8">
                    <div>
                        <h3 class="font-bold text-left text-red-600">Compañía</h3>
                        <ul class="mt-2 text-gray-600">
                            <li><a href="#" class="hover:underline">Acerca</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Carreras</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Blog</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Precios</a></li>
                        </ul>
                    </div>
                    <div>

                        <h3 class="font-bold text-left text-red-600">Destinos</h3>
                        <ul class="mt-2 text-gray-600">
                            <li><a href="#" class="hover:underline">Maldivas</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Los Angeles</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Las Vegas</a></li>
                            <li class="mt-1"><a href="#" class="hover:underline">Toronto</a></li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="font-bold text-left text-red-600">Ayuda</h3>
                        <div class="mt-2">
                            <p class="mt-1 text-gray-600 text-sm">Si tienes dudas comunicate a este correo:</p>
                            <h5 class="font-bold text-center text-red-600">travelgo@gmail.com</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-300 pt-4 text-center text-gray-600 text-sm">
                &copy; {{ date('Y') }} TravelGo. Todos los derechos reservados.
            </div>
        </div>
    </footer>
</section>
