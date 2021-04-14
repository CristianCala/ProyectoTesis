<?php

namespace Database\Factories;

use App\Models\AccesoCliente;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class AccesoClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AccesoCliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'acl_ip' => $this->faker->ipv4,
            'acl_descripcion' => $this->faker->sentence,
            'acl_estatus' =>  $this->faker->suffix,
            'acl_pantalla' => Str::random(10),
        ];
    }
}
