<?php

namespace Database\Factories;

use App\Models\Bid;
use App\Models\Propiedades;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puja>
 */
class BidFactory extends Factory
{
     /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bid::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cliente_id' => \App\Models\User::factory(),
             'propiedad_id' => Propiedades::factory(),
            'monto' => $this->faker->numberBetween(10000, 500000), // Genera un monto aleatorio entre 10,000 y 500,000
        ];
    }
}
