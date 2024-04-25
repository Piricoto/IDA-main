<?php

namespace Database\Seeders;

use App\Models\Mensaje;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MensajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mensaje::factory()->count(10)->create();
    }
}
