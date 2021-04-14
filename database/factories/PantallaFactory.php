<?php

namespace Database\Factories;

use App\Models\Pantalla;
use Illuminate\Database\Eloquent\Factories\Factory;

class PantallaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pantalla::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pan_nombre' => $this->faker->name,
            'pan_descripcion' => $this->faker->sentence,
            'pan_estatus' =>  $this->faker->suffix,
        ];
    }
}
