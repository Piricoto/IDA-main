<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        //$this->call(BidSeeder::class);
        //$this->call(UserSeeder::class);
        $this->call(PropiedadesSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(ClientesSeeder::class);
    }
}
