<?php

namespace Database\Factories;

use App\Models\Auditoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Auditoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'au_maquina' => $this->faker->numerify('###'),
            'au_so' => $this->faker->sentence,
            'au_ip' =>  $this->faker->localIpv4,
            'au_navegador' => $this->faker->slug,
            'au_fecha' => $this->faker->date,
        ];
    }
}
