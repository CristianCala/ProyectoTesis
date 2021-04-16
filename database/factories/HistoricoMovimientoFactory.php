<?php

namespace Database\Factories;

use App\Models\HistoricoMovimiento;
use Illuminate\Database\Eloquent\Factories\Factory;

class HistoricoMovimientoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = HistoricoMovimiento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_equipo' => $this->faker->name,
            'id_ubicacion' => $this->faker->name,
        ];
    }
}
