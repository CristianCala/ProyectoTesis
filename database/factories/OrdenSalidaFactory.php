<?php

namespace Database\Factories;

use App\Models\OrdenSalida;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdenSalidaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OrdenSalida::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ord_ubicacion' => $this->faker->address,
        ];
    }
}
