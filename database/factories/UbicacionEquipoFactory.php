<?php

namespace Database\Factories;

use App\Models\UbicacionEquipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbicacionEquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UbicacionEquipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ubeq_nombre' => $this->faker->name,
            'ubeq_descripcion' =>  $this->faker->sentence,
        ];
    }
}
