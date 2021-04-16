<?php

namespace Database\Factories;

use App\Models\PrestamoEquipo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PrestamoEquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PrestamoEquipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pres_salida' => $this->faker->numerify('###'),
            'pres_fecha_salida' => $this->faker->date,
            'pres_fecha_entrada' => $this->faker->date,
            'pres_estatus' => $this->faker->suffix,
        ];
    }
}
