<?php

namespace Database\Factories;

use App\Models\Equipo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class EquipoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'eq_modelo' => $this->faker->name,
            'eq_marca' => $this->faker->name,
            'eq_serial' => Str::random(10),
            'eq_nbiennacional' => $this->faker->numerify('###-###-####'),
            'eq_estatus' => $this->faker->name,
        ];
    }
}
