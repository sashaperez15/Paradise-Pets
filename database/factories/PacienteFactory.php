<?php

namespace Database\Factories;

use App\Models\Propietario;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $propietarios = Propietario::pluck('id')->toArray();
        return [
            'id_propietario' => $this->faker->randomElement($propietarios),
            'nombre' => $this->faker->firstName,
            'sexo' => $this->faker->randomElement(["hembra", "macho"]),
            'peso' => $this->faker->numberBetween(2, 100),
            'edad' => $this->faker->numberBetween(1, 15),
            'color' => $this->faker->randomElement(["blanco", "gris", "cafe"]),
            'esterilizado' => $this->faker->randomElement(["si", "no"])
        ];
    }
}
