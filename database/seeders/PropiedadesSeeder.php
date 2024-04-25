<?php

namespace Database\Seeders;

use App\Models\Propiedades;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PropiedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Propiedades::factory(10)->create();
    }
}
