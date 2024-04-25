<?php

namespace Database\Factories;

use App\Models\Mensaje;
use App\Models\Propiedades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mensaje>
 */
class MensajeFactory extends Factory
{
    protected $model = Mensaje::class;

    public function definition()
    {
        return [
            'emisor_id' => \App\Models\User::factory(), // Assuming you have a UserFactory to generate user IDs
            'receptor_id' => \App\Models\User::factory(),
            'propiedad_id' => Propiedades::factory(), // Assuming you have a PropiedadFactory to generate property IDs
            'contenido' => $this->faker->text(50), // Generate a random text for the message content
            'leido' => $this->faker->boolean, // Randomly generate true or false
            'fecha_enviado' => now(), // Use the current time as the sent time
        ];
    }
}
