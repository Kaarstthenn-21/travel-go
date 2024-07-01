<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener el ID de los hoteles (reemplazar con los IDs correctos de los hoteles creados)
        $hotelAId = 1; // Reemplazar con el ID del Hotel A
        $hotelBId = 2; // Reemplazar con el ID del Hotel B

        Room::create([
            'hotel_id' => $hotelAId,
            'type' => 'Standard',
            'beds' => 2,
            'tv' => true,
            'bathrooms' => 1,
            'available' => true,
        ]);

        Room::create([
            'hotel_id' => $hotelAId,
            'type' => 'Suite',
            'beds' => 3,
            'tv' => true,
            'bathrooms' => 2,
            'available' => false,
        ]);

        Room::create([
            'hotel_id' => $hotelBId,
            'type' => 'Double',
            'beds' => 2,
            'tv' => false,
            'bathrooms' => 1,
            'available' => true,
        ]);

        // Añadir más habitaciones según sea necesario
    }
}
