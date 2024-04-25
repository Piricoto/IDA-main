<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Alberto',
            'email' => 'albertovillardiaz@yahoo.com',
            'password' => Hash::make('12345678'), // Usa un hash para la contraseña
            ])->assignRole('Admin');

            User::create([
                'name' => 'Gilberto',
                'email' => 'Gilberto@yahoo.com',
                'password' => Hash::make('12345678'), // Usa un hash para la contraseña
                ])->assignRole('Cliente');
      
      //  ->assignRole('Admin')
    }
}
