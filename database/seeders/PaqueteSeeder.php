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
            'Arequipa' => 'https://i.pinimg.com/550x/29/2c/c1/292cc19fa1f63a7842a6f3ac24d2ee1c.jpg',
            'Trujillo' => 'https://content.emarket.pe/common/collections/standard/bb/48/bb481695-657c-486c-bb3d-856651b33959.jpg',
            'Chiclayo' => 'https://portal.andina.pe/EDPfotografia3/Thumbnail/2019/04/02/000575371W.jpg',
            'Iquitos' => 'https://blogskystorage.s3.amazonaws.com/2022/01/viaje-a-iquitos.jpeg',
            'Cusco' => 'https://www.ytuqueplanes.com/imagenes/fotos/novedades/notacusco.jpg',
            'Pucallpa' => 'https://www.turiweb.pe/wp-content/uploads/2024/04/pucallpa1-050424.jpg',
            'Tacna' => 'https://radiouno.pe/wp-content/uploads/2021/07/received_1641840639343358-01.jpeg',
            'Tarapoto' => 'https://viajeradicta.com/wp-content/uploads/2018/12/plaza-de-armas-tarapoto.jpg',
            'Juliaca' => 'https://elcomercio.pe/resizer/aEbcEUk0a49tRRmYZjpYM6fpGlQ=/620x0/smart/filters:format(jpeg):quality(75)/arc-anglerfish-arc2-prod-elcomercio.s3.amazonaws.com/public/R3JFXZJ4WRFJ7OGWLFWUKZ5RDA.jpg',
            'Ayacucho' => 'https://viajaconrichy.com/wp-content/uploads/2023/06/Plaza-de-Huamanga-en-Ayacucho.jpg',
            'Huancayo' => 'https://cdn.www.gob.pe/uploads/document/file/2386646/WhatsApp%20Image%202021-11-10%20at%208.54.45%20AM.jpeg.jpeg',
            'Huaraz' => 'https://elcomercio.pe/resizer/lYwt7ESbxJDEtASkEWfHw82om30=/980x0/smart/filters:format(jpeg):quality(75)/cloudfront-us-east-1.images.arcpublishing.com/elcomercio/F3E6BXI4A5ADXNH7W3QWDXIUGI.jpg',
            'Chachapoyas' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/8f/Chachapoyas.jpg/640px-Chachapoyas.jpg',
            'Moquegua' => 'https://prensaregional.pe/wp-content/uploads/2021/11/Plaza-de-Armas-de-Moquegua-25072021.jpg',
            'Puerto Maldonado' => 'https://denomades.s3.us-west-2.amazonaws.com/blog/wp-content/uploads/2019/12/29190658/51794221_409788829591367_9164288306362449920_n.jpg',
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

