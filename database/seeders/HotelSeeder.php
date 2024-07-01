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
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719813162/hotel9_hueo9y.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel B',
            'description' => 'Description of Hotel B',
            'price' => 200.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719813162/hotel8_ylkwu8.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel C',
            'description' => 'Description of Hotel C',
            'price' => 180.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812831/hotel7_d3pi2e.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel D',
            'description' => 'Description of Hotel D',
            'price' => 220.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812780/hotel6_pdrdor.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel E',
            'description' => 'Description of Hotel E',
            'price' => 190.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812780/hotel5_tji89t.jpg',
        ]);

        // Continuar añadiendo más hoteles aquí
        Hotel::create([
            'name' => 'Hotel F',
            'description' => 'Description of Hotel F',
            'price' => 170.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812776/hotel4_pzxqjb.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel G',
            'description' => 'Description of Hotel G',
            'price' => 210.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812776/hotel4_pzxqjb.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel H',
            'description' => 'Description of Hotel H',
            'price' => 160.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812776/hotel4_pzxqjb.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel I',
            'description' => 'Description of Hotel I',
            'price' => 230.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719369281/lima_jnvqb7.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel J',
            'description' => 'Description of Hotel J',
            'price' => 180.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719804672/zuiza_ae8axa.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel K',
            'description' => 'Description of Hotel K',
            'price' => 200.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812776/hotel4_pzxqjb.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel L',
            'description' => 'Description of Hotel L',
            'price' => 190.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812776/hotel4_pzxqjb.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel M',
            'description' => 'Description of Hotel M',
            'price' => 210.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812776/hotel4_pzxqjb.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel N',
            'description' => 'Description of Hotel N',
            'price' => 170.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812780/hotel5_tji89t.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel O',
            'description' => 'Description of Hotel O',
            'price' => 220.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812780/hotel6_pdrdor.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel P',
            'description' => 'Description of Hotel P',
            'price' => 180.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812831/hotel7_d3pi2e.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel Q',
            'description' => 'Description of Hotel Q',
            'price' => 200.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719813162/hotel8_ylkwu8.jpg',
        ]);

        Hotel::create([
            'name' => 'Hotel R',
            'description' => 'Description of Hotel R',
            'price' => 190.00,
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719813162/hotel9_hueo9y.jpg',
        ]);
    }
}
