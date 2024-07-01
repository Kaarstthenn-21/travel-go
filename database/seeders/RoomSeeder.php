<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\Hotel;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Obtener el ID del hotel al que pertenecen las habitaciones (por ejemplo, Hotel A)
        $hotelA = Hotel::where('name', 'Hotel A')->first();

        // Crear 10 habitaciones para Hotel A
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelA->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        $hotelA = Hotel::where('name', 'Hotel A')->first();

        // Crear 10 habitaciones para Hotel A
        for ($i = 11; $i <= 20; $i++) {
            Room::create([
                'hotel_id' => $hotelA->id,
                'type' => 'familiar', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel B
        $hotelB = Hotel::where('name', 'Hotel B')->first();

        // Crear 10 habitaciones para Hotel B
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelB->id,
                'type' => 'Deluxe', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(2, 4), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 3), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }
        // Obtener el ID del hotel C
        $hotelC = Hotel::where('name', 'Hotel C')->first();

        // Crear 10 habitaciones para Hotel C
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelC->id,
                'type' => 'Suite', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 2), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(2, 3), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel D
        $hotelD = Hotel::where('name', 'Hotel D')->first();

        // Crear 10 habitaciones para Hotel D
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelD->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel E
        $hotelE = Hotel::where('name', 'Hotel E')->first();

        // Crear 10 habitaciones para Hotel E
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelE->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel F
        $hotelF = Hotel::where('name', 'Hotel F')->first();

        // Crear 10 habitaciones para Hotel F
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelF->id,
                'type' => 'Suite', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(2, 4), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(2, 3), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel G
        $hotelG = Hotel::where('name', 'Hotel G')->first();

        // Crear 10 habitaciones para Hotel G
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelG->id,
                'type' => 'Deluxe', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 2), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel H
        $hotelH = Hotel::where('name', 'Hotel H')->first();

        // Crear 10 habitaciones para Hotel H
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelH->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel I
        $hotelI = Hotel::where('name', 'Hotel I')->first();

        // Crear 10 habitaciones para Hotel I
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelI->id,
                'type' => 'Suite', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(2, 4), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(2, 3), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel J
        $hotelJ = Hotel::where('name', 'Hotel J')->first();

        // Crear 10 habitaciones para Hotel J
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelJ->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel K
        $hotelK = Hotel::where('name', 'Hotel K')->first();

        // Crear 10 habitaciones para Hotel K
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelK->id,
                'type' => 'Deluxe', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 2), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel L
        $hotelL = Hotel::where('name', 'Hotel L')->first();

        // Crear 10 habitaciones para Hotel L
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelL->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel M
        $hotelM = Hotel::where('name', 'Hotel M')->first();

        // Crear 10 habitaciones para Hotel M
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelM->id,
                'type' => 'Suite', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(2, 4), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(2, 3), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel N
        $hotelN = Hotel::where('name', 'Hotel N')->first();

        // Crear 10 habitaciones para Hotel N
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelN->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel O
        $hotelO = Hotel::where('name', 'Hotel O')->first();

        // Crear 10 habitaciones para Hotel O
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelO->id,
                'type' => 'Deluxe', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 2), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel P
        $hotelP = Hotel::where('name', 'Hotel P')->first();

        // Crear 10 habitaciones para Hotel P
        for ($i = 1; $i <= 10; $i++) {
            Room::create([
                'hotel_id' => $hotelP->id,
                'type' => 'Standard', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
                'beds' => rand(1, 3), // Número aleatorio de camas
                'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
                'bathrooms' => rand(1, 2), // Número aleatorio de baños
                'available' => true, // Todas las habitaciones están inicialmente disponibles
                'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
            ]);
        }

        // Obtener el ID del hotel Q
    $hotelQ = Hotel::where('name', 'Hotel Q')->first();

    // Crear 10 habitaciones para Hotel Q
    for ($i = 1; $i <= 10; $i++) {
        Room::create([
            'hotel_id' => $hotelQ->id,
            'type' => 'Deluxe', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
            'beds' => rand(1, 2), // Número aleatorio de camas
            'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
            'bathrooms' => rand(1, 2), // Número aleatorio de baños
            'available' => true, // Todas las habitaciones están inicialmente disponibles
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
        ]);
    }

    // Obtener el ID del hotel R
    $hotelR = Hotel::where('name', 'Hotel R')->first();

    // Crear 10 habitaciones para Hotel R
    for ($i = 1; $i <= 10; $i++) {
        Room::create([
            'hotel_id' => $hotelR->id,
            'type' => 'Suite', // Tipo de habitación (puedes ajustar según tus tipos de habitación)
            'beds' => rand(2, 4), // Número aleatorio de camas
            'tv' => rand(0, 1), // Valor booleano aleatorio para la TV
            'bathrooms' => rand(2, 3), // Número aleatorio de baños
            'available' => true, // Todas las habitaciones están inicialmente disponibles
            'image_url' => 'https://res.cloudinary.com/dq6cfkrrz/image/upload/v1719812770/hotel3_cmzv9t.jpg', // URL de la imagen de la habitación (ajusta según corresponda)
        ]);
    }


    }
}
