<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $trips = [
            [
                'from' => 'Lima',
                'to' => 'Arequipa',
                'description' => 'Disfruta del clima soleado y la arquitectura colonial de Arequipa.',
                'start_date' => '2024-09-15',
                'end_date' => '2024-09-25',
                'guests' => 3,
                'price' => 1200.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.peru.travel%2Fes%2Fdestinos%2Farequipa&psig=AOvVaw15yRxgAVxb5btlA2yezCEt&ust=1719458471416000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCNjn24yo-IYDFQAAAAAdAAAAABAE'
            ],
            [
                'from' => 'Lima',
                'to' => 'Trujillo',
                'description' => 'Descubre la ciudad de la eterna primavera y sus huacas.',
                'start_date' => '2024-10-01',
                'end_date' => '2024-10-05',
                'guests' => 2,
                'price' => 700.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fblog.properati.com.pe%2Fguia-de-ciudades%2Ftrujillo%2F&psig=AOvVaw18SCSD0qSP0PDT-xd-qrNs&ust=1719458491324000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIjohZmo-IYDFQAAAAAdAAAAABAE'
            ],
            [
                'from' => 'Lima',
                'to' => 'Trujillo',
                'description' => 'Relájate en las playas soleadas de Trujillo.',
                'start_date' => '2024-11-10',
                'end_date' => '2024-11-15',
                'guests' => 4,
                'price' => 900.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.elle.com%2Fes%2Fliving%2Fviajes%2Fa29140181%2Ftrujillo-caceres-que-ver%2F&psig=AOvVaw18SCSD0qSP0PDT-xd-qrNs&ust=1719458491324000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCIjohZmo-IYDFQAAAAAdAAAAABAI'
            ],
            [
                'from' => 'Lima',
                'to' => 'Chiclayo',
                'description' => 'Explora la riqueza cultural de Chiclayo.',
                'start_date' => '2024-12-01',
                'end_date' => '2024-12-07',
                'guests' => 3,
                'price' => 900.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.plataforma10.com.pe%2Fviajes%2Fdestinos%2Fchiclayo%2F&psig=AOvVaw1bRrTet6WDHzaTj0vx5uhn&ust=1719458576876000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMjL2L-o-IYDFQAAAAAdAAAAABAE'
            ],
            [
                'from' => 'Lima',
                'to' => 'Iquitos',
                'description' => 'Aventura en la selva amazónica de Iquitos.',
                'start_date' => '2024-12-15',
                'end_date' => '2024-12-20',
                'guests' => 2,
                'price' => 1300.00,
                'image_url' => 'https://www.google.com/imgres?q=Iquitos&imgurl=https%3A%2F%2Fblogskystorage.s3.amazonaws.com%2F2022%2F01%2Fviaje-a-iquitos.jpeg&imgrefurl=https%3A%2F%2Fwww.skyairline.com%2Fblog%2Fviaje-a-iquitos%2F&docid=pbM5PozCy3baOM&tbnid=u-8mf9pOBgBA3M&vet=12ahUKEwjaz6DHqPiGAxWzALkGHWypBVIQM3oECGgQAA..i&w=2119&h=1415&hcb=2&ved=2ahUKEwjaz6DHqPiGAxWzALkGHWypBVIQM3oECGgQAA'
            ],
            [
                'from' => 'Cusco',
                'to' => 'Lima',
                'description' => 'Retorno a la capital peruana desde la mágica ciudad de Cusco.',
                'start_date' => '2024-07-15',
                'end_date' => '2024-07-20',
                'guests' => 4,
                'price' => 1400.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Flima2019.pe%2Fguia-del-espectador%2Fbienvenidos-a-lima&psig=AOvVaw0JNixPEiqGB0p92k2AlT7M&ust=1719458618082000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCJCe0NKo-IYDFQAAAAAdAAAAABAE'
            ],
            [
                'from' => 'Lima',
                'to' => 'Pucallpa',
                'description' => 'Descubre la belleza natural de Pucallpa y sus alrededores.',
                'start_date' => '2024-08-10',
                'end_date' => '2024-08-15',
                'guests' => 3,
                'price' => 1000.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fes.wikipedia.org%2Fwiki%2FPucallpa&psig=AOvVaw2mzUtT5_Cb9dujcieIOtMc&ust=1719458649098000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCJikruGo-IYDFQAAAAAdAAAAABAE'
            ],
            [
                'from' => 'Lima',
                'to' => 'Tacna',
                'description' => 'Conoce la historia y cultura de la ciudad heroica de Tacna.',
                'start_date' => '2024-09-05',
                'end_date' => '2024-09-10',
                'guests' => 2,
                'price' => 950.00,
                'image_url' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fbodegaspirit.com%2Ftacna%2Fvisitar-ciudad-de-tacna-lugares-turisticos%2F&psig=AOvVaw2OseIrCVn8MC_YsEMan_x5&ust=1719458665707000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCPCbq-mo-IYDFQAAAAAdAAAAABAN'
            ],
            [
                'from' => 'Lima',
                'to' => 'Tarapoto',
                'description' => 'Explora las cataratas y naturaleza de Tarapoto.',
                'start_date' => '2024-10-20',
                'end_date' => '2024-10-25',
                'guests' => 4,
                'price' => 1150.00,
                'image_url' => 'https://example.com/image11.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Juliaca',
                'description' => 'Viaja a la ciudad de Juliaca y conoce el Lago Titicaca.',
                'start_date' => '2024-11-05',
                'end_date' => '2024-11-10',
                'guests' => 3,
                'price' => 1050.00,
                'image_url' => 'https://example.com/image12.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Ayacucho',
                'description' => 'Descubre la ciudad de las iglesias y su rica historia.',
                'start_date' => '2024-12-05',
                'end_date' => '2024-12-10',
                'guests' => 2,
                'price' => 850.00,
                'image_url' => 'https://example.com/image13.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Huancayo',
                'description' => 'Explora la sierra central en Huancayo.',
                'start_date' => '2024-12-20',
                'end_date' => '2024-12-25',
                'guests' => 4,
                'price' => 950.00,
                'image_url' => 'https://example.com/image14.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Huaraz',
                'description' => 'Aventura en las montañas y glaciares de Huaraz.',
                'start_date' => '2024-07-05',
                'end_date' => '2024-07-10',
                'guests' => 3,
                'price' => 1100.00,
                'image_url' => 'https://example.com/image15.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Chachapoyas',
                'description' => 'Explora la fortaleza de Kuelap y las cataratas de Gocta.',
                'start_date' => '2024-08-20',
                'end_date' => '2024-08-25',
                'guests' => 2,
                'price' => 1200.00,
                'image_url' => 'https://example.com/image16.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Moquegua',
                'description' => 'Conoce la tranquila ciudad de Moquegua y sus alrededores.',
                'start_date' => '2024-09-25',
                'end_date' => '2024-09-30',
                'guests' => 4,
                'price' => 900.00,
                'image_url' => 'https://example.com/image17.jpg'
            ],
            [
                'from' => 'Lima',
                'to' => 'Puerto Maldonado',
                'description' => 'Aventura en la selva de Puerto Maldonado.',
                'start_date' => '2024-10-15',
                'end_date' => '2024-10-20',
                'guests' => 3,
                'price' => 1300.00,
                'image_url' => 'https://example.com/image18.jpg'
            ],
        ];

        foreach ($trips as $trip) {
            Trip::create($trip);
        }
    }
}
