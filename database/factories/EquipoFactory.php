<?php

namespace Database\Factories;

use App\Models\Equipo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
           'user_id' => User::factory(),
           'eq_modelo' => $this->faker->word,
           'eq_marca' => $this->faker->word,
           'precio' => $this->faker->randomNumber(2),
           'status' => $this->faker->boolean()
        ];
    }
}
