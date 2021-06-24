<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Asistencia;
use Illuminate\Database\Eloquent\Factories\Factory;

class AsistenciaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Asistencia::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'nota' => $this->faker->text(80),
            'estado' => $this->faker->numberBetween(0,1)
        ];
    }
}
