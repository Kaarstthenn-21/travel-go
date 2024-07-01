<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    /**public function run(): void
    {
        // Vaciar las tablas para evitar conflictos de duplicidad
        DB::table('users')->truncate();
        DB::table('trips')->truncate();

        // Crear usuarios
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'unique_test1@example.com', // Cambia a un correo único
        ]);

        \App\Models\User::factory(10)->create(); // Crear más usuarios con correos únicos automáticos

        // Ejecutar el seeder de Trip
        $this->call(TripSeeder::class);
    }*/
    public function run()
    {
        $this->call([
            PaqueteSeeder::class,
        ]);
    }
}
