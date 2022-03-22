<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;


class PropietarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_completo' => $this->faker->name,
            'telefono' => $this->faker->numerify("########"),
            'identidad' => "0704".$this->faker->numerify("####")."00".$this->faker->numerify("###"),
            'direccion' => $this->faker->address,
            'correo' => $this->faker->email
        ];
    }
}
