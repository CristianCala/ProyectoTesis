<?php

namespace Database\Factories;

use App\Models\AccesoClientes;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccesoClientesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AccesoClientes::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'acl_ip' => $this->faker->localIpv4,
            'acl_descripcion' => $this->faker->sentence,
            'acl_estatus' => $this->faker->suffix,
            'acl_pantalla' => $this->faker->name,
        ];
    }
}
