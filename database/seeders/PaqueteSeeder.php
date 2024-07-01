<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paquete;
use App\Models\Trip;
use App\Models\Hotel;

class PaqueteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener todos los vuelos y hoteles
        $vuelos = Trip::all();
        $hoteles = Hotel::all();

        // Array de descripciones para los destinos
        $descripciones = [
            'Arequipa' => 'Disfruta del clima soleado y la arquitectura colonial de Arequipa.',
            'Trujillo' => 'Descubre la ciudad de la eterna primavera y sus huacas.',
            'Chiclayo' => 'Explora la riqueza cultural de Chiclayo.',
            'Iquitos' => 'Aventura en la selva amazónica de Iquitos.',
            'Cusco' => 'Retorno a la capital peruana desde la mágica ciudad de Cusco.',
            'Pucallpa' => 'Descubre la belleza natural de Pucallpa y sus alrededores.',
            'Tacna' => 'Conoce la historia y cultura de la ciudad heroica de Tacna.',
            'Tarapoto' => 'Explora las cataratas y naturaleza de Tarapoto.',
            'Juliaca' => 'Viaja a la ciudad de Juliaca y conoce el Lago Titicaca.',
            'Ayacucho' => 'Descubre la ciudad de las iglesias y su rica historia.',
            'Huancayo' => 'Explora la sierra central en Huancayo.',
            'Huaraz' => 'Aventura en las montañas y glaciares de Huaraz.',
            'Chachapoyas' => 'Explora la fortaleza de Kuelap y las cataratas de Gocta.',
            'Moquegua' => 'Conoce la tranquila ciudad de Moquegua y sus alrededores.',
            'Puerto Maldonado' => 'Aventura en la selva de Puerto Maldonado.',
        ];

        // Array de URLs de imágenes para los destinos
        $imagenes = [
            'Arequipa' => 'https://example.com/arequipa.jpg',
            'Trujillo' => 'https://example.com/trujillo.jpg',
            'Chiclayo' => 'https://example.com/chiclayo.jpg',
            'Iquitos' => 'https://example.com/iquitos.jpg',
            'Cusco' => 'https://example.com/cusco.jpg',
            'Pucallpa' => 'https://example.com/pucallpa.jpg',
            'Tacna' => 'https://example.com/tacna.jpg',
            'Tarapoto' => 'https://example.com/tarapoto.jpg',
            'Juliaca' => 'https://example.com/juliaca.jpg',
            'Ayacucho' => 'https://example.com/ayacucho.jpg',
            'Huancayo' => 'https://example.com/huancayo.jpg',
            'Huaraz' => 'https://example.com/huaraz.jpg',
            'Chachapoyas' => 'https://example.com/chachapoyas.jpg',
            'Moquegua' => 'https://example.com/moquegua.jpg',
            'Puerto Maldonado' => 'https://example.com/puerto-maldonado.jpg',
        ];

        // Crear paquetes utilizando los vuelos y hoteles
        foreach ($vuelos as $vuelo) {
            // Seleccionar un hotel aleatorio
            $hotel = $hoteles->random();

            // Definir el nombre del paquete basado en el destino del vuelo
            $nombrePaquete = $vuelo->to . ' - Paquete de Viaje';

            // Obtener la descripción y la imagen para el destino
            $descripcion = $descripciones[$vuelo->to] ?? 'Descripción del destino no disponible.';
            $imagenUrl = $imagenes[$vuelo->to] ?? 'https://example.com/default.jpg';

            // Crear el paquete
            Paquete::create([
                'nombre' => $nombrePaquete,
                'descripcion' => $descripcion,
                'rating' => rand(1, 5),
                'duracion' => rand(3, 14) . ' días',
                'imagen' => $imagenUrl,
                'id_vuelo' => $vuelo->id,
                'id_hotel' => $hotel->id,
                'incluye_hotel' => true,
                'precio' => rand(500, 2000),
            ]);
        }
    }
}

