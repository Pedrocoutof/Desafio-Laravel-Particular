<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EnderecosAluno>
 */
class EnderecosAlunoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
             return [
                 'cidade' => $this->faker->city(),
                 'bairro' => $this->faker->word(),
                 'rua' => $this->faker->streetName(),
                 'numero' => $this->faker->numberBetween(0, 999),
        ];
    }
}
