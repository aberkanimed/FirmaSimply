<?php

namespace Database\Factories;

use App\Models\Pildora;
use Illuminate\Database\Eloquent\Factories\Factory;

class PildoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pildora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->sentence(),
            'descripcion' => $this->faker->text(),
            'fecha_presentacion' => $this->faker->dateTimeInInterval('now', '+ 30 days'),
            'estado' => $this->faker->numberBetween(0, 1),
            'user_id' => 1
        ];
    }
}
