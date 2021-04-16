<?php

namespace Database\Factories;

use App\Models\Acciones;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccionesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Acciones::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ac_tipo' => $this->faker->name,
            'ac_descripcion' => $this->faker->name,
        ];
    }
}
