<?php

namespace Database\Factories;

use App\Models\UsuarioXDepartamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioXDepartamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsuarioXDepartamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'usxdp_descripcion' => $this->faker->sentence,
            'usxdp_estatus' => $this->faker->suffix,
        ];
    }
}
