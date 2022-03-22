<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class TratamientoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $pacientes = Paciente::pluck('id')->toArray();
        $medicamentos = [
            'Hemolitan',
            'Omega 3',
            'Rondel',
            'Apoquel',
            'Fronil',
        ];

        return [

            'id_paciente' => $this->faker->randomElement($pacientes),
            'nombre_medicamento' => $this->faker->randomElement($medicamentos),
            'descripcion' => $this->faker->text(),
            'dosis' => $this->faker->numberBetween(1,10)."ml"

        ];
    }
}
