<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hotel;

class HotelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::create([
            'name' => 'Hotel A',
            'description' => 'Description of Hotel A',
            'price' => 150.00,
            'image_url' => 'https://example.com/hotelA.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel B',
            'description' => 'Description of Hotel B',
            'price' => 200.00,
            'image_url' => 'https://example.com/hotelB.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel C',
            'description' => 'Description of Hotel C',
            'price' => 180.00,
            'image_url' => 'https://example.com/hotelC.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel D',
            'description' => 'Description of Hotel D',
            'price' => 220.00,
            'image_url' => 'https://example.com/hotelD.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel E',
            'description' => 'Description of Hotel E',
            'price' => 190.00,
            'image_url' => 'https://example.com/hotelE.jpg',
        ]);

        // Continuar añadiendo más hoteles aquí
        Hotel::create([
            'name' => 'Hotel F',
            'description' => 'Description of Hotel F',
            'price' => 170.00,
            'image_url' => 'https://example.com/hotelF.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel G',
            'description' => 'Description of Hotel G',
            'price' => 210.00,
            'image_url' => 'https://example.com/hotelG.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel H',
            'description' => 'Description of Hotel H',
            'price' => 160.00,
            'image_url' => 'https://example.com/hotelH.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel I',
            'description' => 'Description of Hotel I',
            'price' => 230.00,
            'image_url' => 'https://example.com/hotelI.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel J',
            'description' => 'Description of Hotel J',
            'price' => 180.00,
            'image_url' => 'https://example.com/hotelJ.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel K',
            'description' => 'Description of Hotel K',
            'price' => 200.00,
            'image_url' => 'https://example.com/hotelK.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel L',
            'description' => 'Description of Hotel L',
            'price' => 190.00,
            'image_url' => 'https://example.com/hotelL.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel M',
            'description' => 'Description of Hotel M',
            'price' => 210.00,
            'image_url' => 'https://example.com/hotelM.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel N',
            'description' => 'Description of Hotel N',
            'price' => 170.00,
            'image_url' => 'https://example.com/hotelN.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel O',
            'description' => 'Description of Hotel O',
            'price' => 220.00,
            'image_url' => 'https://example.com/hotelO.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel P',
            'description' => 'Description of Hotel P',
            'price' => 180.00,
            'image_url' => 'https://example.com/hotelP.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel Q',
            'description' => 'Description of Hotel Q',
            'price' => 200.00,
            'image_url' => 'https://example.com/hotelQ.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel R',
            'description' => 'Description of Hotel R',
            'price' => 190.00,
            'image_url' => 'https://example.com/hotelR.jpg',
        ]);
    }
}
