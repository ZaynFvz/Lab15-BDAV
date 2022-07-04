<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class articuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'descripcion' => $this->faker-> text(),
        ];
    }
}
