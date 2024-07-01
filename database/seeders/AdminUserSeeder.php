<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Encuentra el usuario por su correo electrónico
        $adminUser = User::where('email', 'admin123@example.com')->first();

        // Encuentra el rol de administrador
        $adminRole = Role::where('name', 'admin')->first();

        // Asigna el rol de administrador al usuario si existe
        if ($adminUser && $adminRole) {
            $adminUser->roles()->attach($adminRole);
        }
    }
}
